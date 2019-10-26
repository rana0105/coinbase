<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;



class AgentLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:agentlogin', ['except' => ['logout']]);
    }
    public function showLoginForm()
    {
        return view('agent.auth.login');
    }
    public function login(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'agentcode' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('agentlogin')->attempt(['agentcode' => $request->agentcode, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('agent.dashboard'));
        }
        return redirect()->back()->withInput($request->only('agentcode', 'remember'));
    }
    public function logout()
    {
        Auth::guard('agentlogin')->logout();
        return redirect('agent/login');
    }
}
