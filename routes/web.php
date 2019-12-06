<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Auth::routes();

// admin route for dashboard
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::resource('agentcode', 'Admin\AgentCodeController');
    Route::get('beating', 'Admin\AgentCodeController@beating')->name('beating');
    Route::get('beating-create', 'Admin\AgentCodeController@betingCreate')->name('beating.create');
    Route::post('beating-create', 'Admin\AgentCodeController@beatingStore')->name('beating.store');
    Route::get('beating-edit/{id}', 'Admin\AgentCodeController@beatingEdit')->name('beating.edit');
    Route::post('beating-edit', 'Admin\AgentCodeController@beatingUpdate')->name('beating.update');
    Route::get('admin-fund', 'Admin\AgentCodeController@getAdminFund')->name('admin.fund');

    Route::post('admin-fund', 'Admin\AgentCodeController@postAdminFund')->name('admin.fund.store');

    Route::any('show-agent-fund-transfer', 'Admin\AgentCodeController@showAgentFund')->name('show.agent.fund.transfer');
    Route::get('agent-fund-transfer', 'Admin\AgentCodeController@getAgentFund')->name('agent.fund.transfer');

    Route::post('agent-fund-transfer', 'Admin\AgentCodeController@postAgentFund')->name('agent.fund.store');

    Route::any('agent-fund-history', 'Admin\AgentCodeController@agentFundHistory')->name('agent.fund.history');

    Route::any('client-fund-history', 'Admin\AgentCodeController@clientFundHistory')->name('client.fund.history');

    Route::get('bet-hold-history', 'Admin\AgentCodeController@betHoldHistory')->name('bet.hold.history');

    Route::get('bet-wins', 'Admin\AgentCodeController@betwins')->name('bet.wins');

    Route::post('bet-hold-history', 'Admin\AgentCodeController@betHoldWin')->name('bet.win');

    Route::any('bet-win-history', 'Admin\AgentCodeController@betWinHistory')->name('bet.win.history');

    Route::any('withdraw-history', 'Admin\AgentCodeController@withdrawHistory')->name('withdraw.history');

    Route::post('withdraw-approve', 'Admin\AgentCodeController@withdrawApprove')->name('withdraw.approve');

});

// agent login route for dashboard
Route::prefix('agent')->group(function () {
    Route::get('/login', 'Auth\AgentLoginController@showLoginForm')->name('agent.login');
    Route::post('/login', 'Auth\AgentLoginController@login')->name('agent.login.submit');
    Route::get('/dashboard', 'AgentController@index')->name('agent.dashboard');
    Route::get('/logout', 'Auth\AgentLoginController@logout')->name('agent.logout');

});

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web']], function () {

    // agent route start
    Route::get('/agent/dashboard', 'AgentController@index')->name('agent.dashboard');
    Route::get('agent-profile/{id}', 'AgentController@agentProfile')->name('agent.profile');
    Route::get('agent-to-client', 'AgentController@getAgentToClient')->name('agent.to.client');
    Route::post('agent-to-client', 'AgentController@postAgentToClient')->name('agent.to.client.store');

    Route::any('agent-client-fund-history', 'AgentController@agentToClientFundHistory')->name('agent.client.fund.history');

    // client route end

    Route::any('dashboard', 'HomeController@index')->name('dashboard');
    
    Route::get('update-profile', 'HomeController@getUpdateProfile')->name('get.update.profile');
    Route::post('bet-hold', 'HomeController@betHold')->name('bet.hold');

    Route::get('betEditModal/{id}','HomeController@betEditModal');

    Route::post('withdrawAmount', 'HomeController@withdrawAmount')->name('withdrawAmount');

    // profile update for all

    Route::post('profileUpdate', 'AgentController@profileUpdate')->name('profileUpdate');
    Route::post('passwordUpdate', 'AgentController@passwordUpdate')->name('passwordUpdate');

    //composer require intervention/image
});
