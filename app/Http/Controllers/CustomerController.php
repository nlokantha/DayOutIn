<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCustomer(Request $request)
    {
        if($request->has('search'))
        {
            $customers = Customer::where('email','LIKE','%'.$request->search.'%')->latest()->paginate();
        }
        else
        {
            $customers = Customer::latest()->paginate();
        }
        return view('customeradmin.index-customer',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCustomer()
    {
        return view('pages.register-customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCustomer(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:customers',
            'nic' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'password' => 'required|min:6',
            'repassword' => 'required_with:password|same:password|min:6'
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



        $user->customer()->save($customer);
            return redirect()->back()->with('success','Customer added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function showCustomer(Customer $customer)
    {
        return view('customeradmin.show-customer',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function editCustomer(Customer $customer)
    {
        return view('customeradmin.edit-customer',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function updateCustomer(Request $request, Customer $customer)
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

        $input = $request->all();

        $customer->update($input);

        return redirect()->route('indexCustomer')
                ->with('success','Customer Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroyCustomer(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('indexCustomer')
            ->with('success','Owner Deleted Successfully');
    }

    public function aprovaldone($id)
    {
        $customer=Customer::find($id);
        $customer->iscompleted=1;
        $customer->save();
        return redirect()->back();
    }

    public function aprovalcancel($id)
    {
        $customer=Customer::find($id);
        $customer->iscompleted=0;
        $customer->save();
        return redirect()->back();
    }

}
