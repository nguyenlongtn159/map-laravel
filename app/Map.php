<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Map extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'maps';
    protected $fillable = ['name','address','lat','lng','type'];
    public $timestamps = true;
}
