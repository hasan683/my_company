<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class work extends Model
{
    
        protected $table = 'work';
    
     
        public function employe()
        {
            return $this->hasOne('App\employe','id');
        }
    
}
