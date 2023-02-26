<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Photo;
use App\Models\Package;
use App\Models\Order;


class UserDashboardController extends Controller
{
    public function PownerListings()
    {
        $userId = Auth::id();
        $PownerListings = DB::table('packages')
            ->join('powners', 'powners.id', '=', 'packages.powner_id')

            ->join('users', 'users.id', '=', 'powners.user_id')

            ->where('users.id','=',$userId)

            ->join('photos', 'packages.id', '=', 'photos.package_id')
            ->select('packages.*', 'photos.*')
            ->groupBy ('packages.id')

            ->get();
            //dd( $CustomerOrders);
            return view('pages.pownerDashboard',compact('PownerListings'));

    }
    public function CustomerOrders()
    {
        $userId = Auth::id();
        $CustomerOrders = DB::table('orders')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')

            ->join('users', 'users.id', '=', 'orders.user_id')

            ->where('users.id','=',$userId)

            ->get();
            //dd( $CustomerOrders);
            return view('pages.customerDashboard',compact('CustomerOrders'));

    }
    public function forCustomerDashboard(Request $request)
    {
        DB::table('orders') ->where('id', $request->orderId) ->limit(1) ->update( [ 'status' => 2]);

        return redirect('CustomerDashboard')->with('success','Payment succesfull');
    }
    
}
