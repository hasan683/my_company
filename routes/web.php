<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\EmployeController;


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

Route::get('/', 'EmployeController@index');
Route::get('employeeattendence/{id}', 'EmployeController@employeeattendence');
Route::get('work/{id}', 'EmployeController@work');
