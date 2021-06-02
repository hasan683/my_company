<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\employe;
use App\employeeattendence;
use App\work;


class EmployeController extends Controller
{
    
    public function index()
    {
       

        $employes = employe::where('salary','>=',13000)->where('status',1)->get();

        return view('employe', compact('employes'));
    } 


    public function employeeattendence($id)
    {
       

        $employeeattendences =employeeattendence::where('employee_id',$id)->get();

        return view('employeeattendence', compact('employeeattendences'));

     
    } 

    public function work($id)
    {
       

        $works =work::where('employee_id',$id)->get();

        return view('work', compact('works'));

     
    } 
}

