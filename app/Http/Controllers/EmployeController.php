<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\employe;


class EmployeController extends Controller
{
    
    public function index()
    {
       

        $employes = employe::get();

        return view('employe', compact('employes'));
    } 

}

