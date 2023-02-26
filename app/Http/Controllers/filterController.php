<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Powner;
use App\Models\Package;
use App\Models\Photo;

class filterController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->type;
        $location = $request->location;

        $packages = DB::table('packages')
        ->join('photos', 'packages.id', '=', 'photos.package_id')
        ->select('packages.*', 'photos.*')
        ->where([['packages.type',$type],['packages.location',$location]])
        // ->orWhere('packages.type',$type)
        // ->orWhere('packages.location',$location)
        // ->groupBy ('packages.id')
        ->get();

        // dd($packages);

        return view('pages.packages' , compact('packages'));
    }
}
