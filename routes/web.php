<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/page_home', function () {
    return view('page_home');
});  

Route::get('/recemp','te@final');
Route::post('/employee/recemp1','te@final1');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/manager','managercontroller');
Route::resource('/employee','employeecontroller');

Route::resource('/section','sectionconteoller');


Route::resource('/record','attendance_recordscontrol');

Route::resource('/extra','extracontrol');

Route::get('/find','sectionconteoller@find');
Route::get('/sam/{id}','te@show');
Route::get('/sa/{id}','te@fin');
Route::get('/sam/sas/{id}','te@findemp');
Route::get('/servies_create','serviescontrol@create');
Route::post('/servies_store','serviescontrol@store');


Route::get('/jop_create','jopcontroller@create');
Route::post('/jop_store','jopcontroller@store');

Route::get('/list_jop','jopcontroller@show');


Route::resource('/login','logincontroller');
Route::resource('/achieve','achievecontroller');

Route::get('/find4/{id}','te@find4');

Route::get('/achieve/create/{id}','achievecontroller@create1');

Route::get('/achieve/create/{id}','achievecontroller@create1');
Route::get('/balance','te@balance');
Route::resource('/work','workcontroller');

Route::resource('/balance','balance1controller');
Route::post('/balance_store','balance1controller@store1');

Route::get('/managerstart',function(){

    return view('managerstart');
});

Route::resource('/report','reportcontroller');


Route::resource('/requests','requestempcontroller');

Route::get('/requests/{id}','te@request_rate');

Route::get('/requestcreate/{id}','te@requests');

Route::resource('/jop','jopcontroller');

Route::resource('/bonusesemp','bonusecontroller');

Route::get('/bonusescreate','te@bonusescreate');
Route::post('/bonusesstore','te@bonusesstore');







/*






//Route::post('/test','managercontroller@test');
Route::get('/sam',function(){

    return view('wellcompage');
});

//Route::get('sam/{id}','te@show');




//Route::get('/list_employees','te@index');

Route::get('/hrInterFace',function(){

    return view('hrInterFace');
});
Route::get('/help',function(){

    return view('help');
});
Route::get('/index',function(){

    return view('employee.index');
});
Route::get('/manager_',function(){

    return view('profil');
});


Route::get('/ourServices',function(){

    return view('ourServices');
});
*/