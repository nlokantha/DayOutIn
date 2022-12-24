<?php

namespace App\Http\Controllers;

use App\Models\Powner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class PownerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexOwner()
    {
        $powners = Powner::latest()->paginate();

        return view('owneradmin.index-owner',compact('powners'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createOwner()
    {
        return view('pages.register-owner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeOwner(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:powners',
            'nic' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required|min:6',
            'repassword' => 'required_with:password|same:password|min:6'
        ]);

        $user = new User;

        $user->name = $request->fname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_as = 2 ;

        $user->save();

        $Powner = new Powner;
        $Powner->fname = $request->fname;
        $Powner->lname = $request->lname;
        $Powner->nic = $request->nic;
        $Powner->email = $request->email;
        $Powner->contact = $request->contact;
        $Powner->address = $request->address;


        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $Powner->image = $profileImage;
        }


        $user->Powner()->save($Powner);
            return redirect()->back()->with('success','Owner added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Powner  $powner
     * @return \Illuminate\Http\Response
     */
    public function showOwner(Powner $powner)
    {
        return view('owneradmin.show-owner',compact('powner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Powner  $powner
     * @return \Illuminate\Http\Response
     */
    public function editOwner(Powner $powner)
    {
        return view('owneradmin.edit-owner',compact('powner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Powner  $powner
     * @return \Illuminate\Http\Response
     */
    public function updateOwner(Request $request, Powner $powner)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'nic' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'password' => 'required',
            'repassword' => 'required'
        ]);

        $user = new User;

        $user->name = $request->fname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $customer = new Customer;
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->nic = $request->nic;
        $customer->email = $request->email;
        $customer->contact = $request->contact;
        $customer->address = $request->address;


        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $powner->update($input);

        return redirect()->route('indexOwner')
                ->with('success','Owner Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Powner  $powner
     * @return \Illuminate\Http\Response
     */
    public function destroyOwner(Powner $powner)
    {
        $powner->delete();

        return redirect()->route('indexOwner')
            ->with('success','Owner Deleted Successfully');
    }

    public function owneraprovaldone($id)
    {
        $powner=Powner::find($id);
        $powner->iscompleted=1;
        $powner->save();
        return redirect()->back();
    }

    public function owneraprovalcancel($id)
    {
        $powner=Powner::find($id);
        $powner->iscompleted=0;
        $powner->save();
        return redirect()->back();
    }
}
