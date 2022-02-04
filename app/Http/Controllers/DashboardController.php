<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

use DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    // public function index()
    // {
    //     return view('backend.dashboard');
    // }
    // public function index(){
       
    //     $agent = DB::table('orders')->whereDate('created_at',Carbon::today())->where('agentid','>',1)->count();
    //     $web = DB::table('orders')->whereDate('created_at',Carbon::today())->where('agentid','<',1)->count();
       
      
    //       return view('backend.dashboard.dashboard',compact('agent','web'));
    //   }

    public function index(){
        $data= array();

        $agent = DB::table('orders')->whereDate('created_at',Carbon::today())->where('agentid','>',1)->count();
        $web = DB::table('orders')->whereDate('created_at',Carbon::today())->whereNull('agentid')->where('api','RR')->count();
        $spiciyaaa =  DB::table('orders')->whereDate('created_at',Carbon::today())->where('api','SY')->count();
        $orderTotal = DB::table('orders')->whereDate('created_at',Carbon::today())->select('status',DB::raw('SUM(ordertotal) - SUM(discount) as total'))->groupBy('status')->get();
        $totalorder = DB::table('orders')->whereDate('created_at',Carbon::today())->sum('ordertotal');
        $discount = DB::table('orders')->whereDate('created_at',Carbon::today())->sum('discount');
        $total = $totalorder-$discount;
        $data['curdod']=Orders::whereDate('dod_n',Carbon::today())->count();
        $data['nextdod']=Orders::whereDate('dod_n',Carbon::tomorrow())->count();
  
          return view('backend.dashboard.dashboard',compact('agent','data','web','spiciyaaa','orderTotal','total'));
      }
     
}
