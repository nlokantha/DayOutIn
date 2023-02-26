<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use App\Models\Package;

use Illuminate\Support\Facades\Auth;


class OrdersController extends Controller
{
    public function CreateOrder(Request $request,$pkgId)
    {
        $request->validate([
            'fname' => 'required',
            'email' => 'required|email',
            'nic' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'date' => 'required',
            'adults' => 'required',
            'advance' => 'required'
        ]);
        $customer_id = Customer::where('user_id', Auth::user()->id)->get('customers.id');

        // dd($request);
        

        $order = new Order;

        $order->fname = $request->fname;
        $order->email = $request->email;
        $order->nic = $request->nic;
        $order->address = $request->address;
        $order->booking_date = $request->date;
        $order->no_of_persons = $request->adults;
        $order->advance = $request->advance;
        $order->status = 1; //value 1 for Unpaid
        $order->user_id = Auth::user()->id;
        $order->package_id = $pkgId;
        $order->customer_id =  $customer_id[0]->id;
        $order->contact = $request->contact;
        
        
        $order->save();
        $orderId = $order->id;
        $OrderDetails = Order::where('id', $orderId)->get();
        $package = Package::where('id', $pkgId)->get();
        $package[0]->availability = $package[0]->availability - $request->adults;
        $package[0]->save();
        
        return view('pages.payment',compact('OrderDetails','package'));
    }
}
