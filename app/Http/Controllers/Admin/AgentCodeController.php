<?php

namespace App\Http\Controllers\Admin;

use App\Agentlogin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AgentCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agentcodes = Agentlogin::all();
        return view('admin.agentcode.index', compact('agentcodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ran = mt_rand(1000, 9999);
        $agentcode = 'AG' . $ran;
        return view('admin.agentcode.create', compact('agentcode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     dd($request->all());
    //     $checkAgentcode = Agentlogin::where('agentcode', $request->agentcode)->first();
    //     if ($checkAgentcode == null) {
    //         Agentlogin::create($request->all());
    //         return redirect()->route('agentcode.index')->with('success', 'Agent code have been save');
    //     }
    //     return redirect()->route('agentcode.create')->with('success', 'Agent code already exists!');
    // }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        // event(new Registered($user = $this->create($request->all())));

        // $this->guard()->login($user);

        // return $this->registered($request, $user)
        //                 ?: redirect($this->redirectPath());

        $checkAgentcode = Agentlogin::where('agentcode', $request->agentcode)->first();
        if ($checkAgentcode == null) {

            $user = $this->insertdata($request->all());

            return redirect()->route('agentcode.index')->with('success', 'Agent  have been save');
        }
        return redirect()->route('agentcode.create')->with('success', 'Agent code already exists!');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:agentlogins'],
            'agentcode' => ['required', 'string', 'max:255', 'unique:agentlogins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function insertdata(array $data)
    {
        return Agentlogin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'agentcode' => $data['agentcode'],
            'password' => Hash::make($data['password']),
        ]);
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