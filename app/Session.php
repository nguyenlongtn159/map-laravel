<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //
    protected  $table = 'sessions';
    protected  $fillable = ['lang'];
    public $timestamps = true;
    public function Session(){

    }
}
