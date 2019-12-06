<?php

namespace App\Http\Controllers;
use DB;

class AdminController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $betEarn = DB::select(DB::raw("SELECT distinct bet.betname, bet.betid, bcount, bamount, date(us.created_at) created_at from ( SELECT betname, betid, sum(quantity) bcount, sum(betprice) bamount FROM `bet_holds` WHERE DATE(`created_at`) = CURDATE() GROUP BY betname, betid) bet INNER JOIN bet_holds us on us.betid = bet.betid WHERE DATE(`created_at`) = CURDATE()"));

        $betHold = collect($betEarn);

        return view('admin.dashboard',compact('betHold'));
    }

}
