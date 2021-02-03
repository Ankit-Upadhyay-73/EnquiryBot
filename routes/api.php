<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::resource('user','ResourceContro');

// Route::prefix('/users')->group(function()
// {
//     Route::get('/{id}/show',function()
//     {
//         return 'show users';
//     });

//     Route::get('/create',function()
//     {
//         return 'create user';
//     });
// });

// Route::apiResource('users','ApiContro');

// Route::middleware('throttle:2,1')->group(function()
// {
//     Route::get('/hello',function()
//     {
//         return 'This is done through connection mechanism';
//     });
// });

// 


//FOR redirect 

// Route::get('hello-ankit',function()
// {
//     return redirect()->to('api/login');
// });

// Route::get('login',function(){
//     return 'login is happening';
// });

// Route::get('/users/{name}',function($name)
// {
//     return $name;
// })->name('users.show');

// Route::get('/users/view/{name}',function($name)
// {
//     return response()->streamDownload(function()
//     {
//         echo DocumentService::file('C:\Users\Abhishek Upadhyay\CompRes\Automation\routes\channels.php')->getContent();
//     },'new.php');
// });

// Route::get('/tasks',function()
// {
//     return view('basic')->with(['val'=>'Ankit']);
// });








Route::get('/msg',function()
{
    // $value  =  DB::table('admins')->join('users',function($join)
    // {
    //     $join->on('users.name','=','admins.name');
    // });
    // return $value;

    // $val = DB::insert('insert into admins values(?,?)',['Vikash',Hash::make('vikash0010201')]);
    // return response()->json($val);
    // DB::delete('delete from admins where name = ?',['Vikash']);
    $returnedValue =  DB::table('admins')->select('name as username')->get();
    return response()->json($returnedValue);
});

