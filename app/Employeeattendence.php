<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employeeattendence extends Model
{
   
        protected $table = 'employeeattendence';
    
        public function employe()
        {
            return $this->hasOne('App\employe','id');
        }
 
}
