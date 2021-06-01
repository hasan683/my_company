<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Employeeattendence;


class EmployeeattendenceController extends Controller
{
    public function employee_attendence()
    {
       
        $employee_attendences = employee_attendence::get();

        return view('employee_attendence', compact('employee_attendences'));
    } 
} -->
