<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request,$pkgId)
    {
        return view('welcome');
    }
}
