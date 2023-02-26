<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Powner;
use App\Models\Package;
use App\Models\Photo;



class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $packages = Package::all();
        $packages = DB::table('packages')
        ->join('photos', 'packages.id', '=', 'photos.package_id')
        ->select('packages.*', 'photos.*')
        ->groupBy ('packages.id')
        ->get();
        // $photos = Photo::all();
        return view('pages.packages' , compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        request()->validate([
            'title' => 'required',
            'type' => 'required',
            'description' => 'required',
            'st_date' => 'required',
            'availability' => 'required',
            'location' => 'required',
            'comments' => 'required',
            'price' => 'required',
            'images' => 'required',

        ]);

        //get property owner's id
        $powner_id = Powner::where('user_id', Auth::user()->id)->get();

        $package = new Package;
        $package->location = $request->location;
        $package->availability = $request->availability;
        $package->discription = $request->description;
        $package->type = $request->type;
        $package->title = $request->title;
        $package->price = $request->price;
        $package->st_date = $request->st_date;
        $package->powner_id = $powner_id[0]->id;

        $package->save();

        $package_id = Package::where('powner_id', $powner_id[0]->id)->get('id');
        // $package->image = $request->driver_photo;
        if($request->has('images')){
            foreach($request->file('images')as $image){
                $imageName = $request->title.'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('product_images'),$imageName);
                Photo::create([
                    'package_id'=>$package->id,
                    'image'=>$imageName
                ]);
            }
        }

        return back()->with('success','Your listing added successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
