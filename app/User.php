<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Iluminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function tarefas(){
        return $this->hasMany('App\Tarefa');
    }
}
