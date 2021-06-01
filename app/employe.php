<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    protected $table = 'employe';

  public function employee_attendence(){
      return $this->hasone(employee_attendence::class,employee)
  }
 
}



