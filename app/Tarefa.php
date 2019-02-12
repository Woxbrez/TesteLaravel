<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    function users(){
        return $this->belongsTo('App\User');
    }
}
