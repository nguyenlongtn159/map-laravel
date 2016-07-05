<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Select_language extends Model
{
    //
    protected  $table = 'select_languages';
    protected  $fillable = ['lang'];
    public $timestamps = true;
    public function Select_language(){

    }
}
