<?php

namespace App\Http\Controllers;

use App\Model\AgenttoClientfund;
use App\Model\BetHold;
use App\Model\BetTable;
use App\Model\BetWin;
use App\Model\ClientWithdraw;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $bets = BetTable::all();

        $currentDate = date('Y-m-d');
        $count1 = BetHold::where('clientid', Auth::user()->id)
                        ->where('betid', 1)
                        ->whereDate('created_at', $currentDate)
                        ->get()->sum('quantity');
        $count2 = BetHold::where('clientid', Auth::user()->id)
                        ->where('betid', 2)
                        ->whereDate('created_at', $currentDate)
                        ->get()->sum('quantity');
        $count3 = BetHold::where('clientid', Auth::user()->id)
                        ->where('betid', 3)
                        ->whereDate('created_at', $currentDate)
                        ->get()->sum('quantity');
        $count4 = BetHold::where('clientid', Auth::user()->id)
                        ->where('betid', 4)
                        ->whereDate('created_at', $currentDate)
                        ->get()->sum('quantity');
        $count5 = BetHold::where('clientid', Auth::user()->id)
                        ->where('betid', 5)
                        ->whereDate('created_at', $currentDate)
                        ->get()->sum('quantity');

        $from_date = $request->from_date;
        $to_date = $request->to_date;

        if ($request->key == 2) {
            if ($from_date != null && $to_date != null) {
                $betWin = BetWin::orderBy('created_at', 'DESC')
                    ->where('clientid', Auth::user()->id)
                    ->whereDate('created_at', '>=', $from_date)
                    ->whereDate('created_at', '<=', $to_date)
                    ->get();
                $withdraws = ClientWithdraw::orderBy('created_at', 'DESC')
                    ->where('clientid', Auth::user()->id)->get();
            }else{
                $betWin = BetWin::orderBy('created_at', 'DESC')
                    ->where('clientid', Auth::user()->id)->get();
                $withdraws = ClientWithdraw::orderBy('created_at', 'DESC')
                    ->where('clientid', Auth::user()->id)->get();
            }
        }elseif ($request->key == 1) {
            if ($from_date != null && $to_date != null) {
                $withdraws = ClientWithdraw::orderBy('created_at', 'DESC')
                    ->where('clientid', Auth::user()->id)
                    ->whereDate('created_at', '>=', $from_date)
                    ->whereDate('created_at', '<=', $to_date)
                    ->get();
                $betWin = BetWin::orderBy('created_at', 'DESC')
                    ->where('clientid', Auth::user()->id)->get();
            }else{
                $betWin = BetWin::orderBy('created_at', 'DESC')
                    ->where('clientid', Auth::user()->id)->get();
                $withdraws = ClientWithdraw::orderBy('created_at', 'DESC')
                    ->where('clientid', Auth::user()->id)->get();
            }
        }else{
            $betWin = BetWin::orderBy('created_at', 'DESC')
                ->where('clientid', Auth::user()->id)->get();
            $withdraws = ClientWithdraw::orderBy('created_at', 'DESC')
                ->where('clientid', Auth::user()->id)->get();
        }

        return view('client.home', compact('bets', 'count1', 'count2', 'count3', 'count4', 'count5', 'betWin', 'withdraws'));
    }

    public function getUpdateProfile()
    {
        $updateProfile = User::find(Auth::user()->id);
        
        return view('client.pages.updateProfile', compact('updateProfile'));
    }

    public function betHold(Request $request)
    {
        $user = Auth::user();   //get db User data   

        if(Hash::check($request->password, $user->password)) {   

             $checkClientFund = AgenttoClientfund::where('to_client', Auth::user()->id)->first();

                $currentDate = date('Y-m-d');
                $checkBetCount = BetHold::where('clientid', Auth::user()->id)
                                        ->where('betid', $request->bet_id)
                                        ->whereDate('created_at', $currentDate)
                                        ->get()->sum('quantity');
                if ($checkClientFund != null) {
                    if ($checkClientFund->amount > $request->total_price) {
                        if ($checkBetCount < 5) {
                            
                            $bethold = new BetHold;
                            $bethold->betid = $request->bet_id;
                            $bethold->betname = $request->bet_name;
                            $bethold->betprice = $request->total_price;
                            $bethold->clientid = Auth::user()->id;
                            $bethold->quantity = $request->quantity;
                            if ($bethold->save()) {
                            $checkClientFund->amount = $checkClientFund->amount - $request->total_price;
                            $checkClientFund->save();
                            return redirect()->route('dashboard')->with('success', 'Bet Hold');
                            }
                        }else{
                            return redirect()->route('dashboard')->with('success', 'All ready Five times hold');
                        }
                        
                    }else{
                        return redirect()->route('dashboard')->with('success', 'Amount Not available');
                    }
                }else{
                    return redirect()->route('dashboard')->with('success', 'Amount Not available');
                }
            } else {
                return redirect()->route('dashboard')->with('success', 'Password not matched with previous password!');
        }

        
        
        return view('client.pages.updateProfile', compact('updateProfile'));
    }

    public function withdrawAmount(Request $request)
    {
         // dd($request->all());

        $agent = User::where('agentcode', Auth::user()->useragentcode)->first();

        $checkClientFund = AgenttoClientfund::where('to_client', Auth::user()->id)->first();

        if ($checkClientFund->amount > $request->withdrawamount && Hash::check($request->password,$agent->password)) {
            
            $withdraw = new ClientWithdraw;
            $withdraw->agentid = $agent->id;
            $withdraw->clientid = Auth::user()->id;
            $withdraw->withdrawamount = $request->withdrawamount;
            $withdraw->payment = $request->payment;
            $withdraw->number = $request->number;
            $withdraw->actualamount = $request->withdrawamount - ($request->withdrawamount * .1);
            $withdraw->chargeamount = ($request->withdrawamount * .1);

            if ($withdraw->save()) {
                $checkClientFund->amount = $checkClientFund->amount - $request->withdrawamount;
                $checkClientFund->save();
                return redirect()->route('dashboard')->with('success', 'Withdraw successfully save to database!');
            }

        }else{
            return redirect()->route('dashboard')->with('success', 'Amount Not available Or Wrong Password');
        }

    }

    public function betEditModal($id)
    {
        $bet = BetTable::find($id);
        return view('client.betHold', compact('bet'));

        //return response()->json($bet);
    }
}
