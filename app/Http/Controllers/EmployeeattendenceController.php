<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employeeattendence;

class EmployeeattendenceController extends Controller
{
    public function employeeattenden()
    {
       

        $employeeattendenc =employeeattendence::get();

        return view('employeeattenden', compact('employeeattendenc'));

     
    } 

}