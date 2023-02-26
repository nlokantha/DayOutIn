<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Powner;
use App\Models\Package;
use App\Models\Photo;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexReview()
    {
        $packages = DB::table('packages')
        ->join('photos', 'packages.id', '=', 'photos.package_id')
        ->select('packages.*', 'photos.*')
        ->groupBy ('packages.id')
        ->orderBy('packages.updated_at','desc')
        ->take(3)
        ->get();
        $reviews = Reviews::latest()->paginate();
        return view('welcome',compact('reviews','packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createReview()
    {
        return view('pages.review');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeReview(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'review' => 'required|string|max:600',
        ]);

        $input = $request->all();

        Reviews::create($input);
            return redirect()->back()->with('success','Thank You For your Response');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    // public function showReview(Reviews $review)
    // {
    //      return view('welcome',compact('review'));
    // }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function edit(Reviews $reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reviews $reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reviews $reviews)
    {
        //
    }
}
