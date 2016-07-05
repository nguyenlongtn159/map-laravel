<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lang extends Model
{
    //
    protected $primaryKey = 'id';
    protected  $table = 'langs';
    protected  $fillable = ['key','eng','vn'];
    public $timestamps = true;
    public function Lang(){
        
    }
    public function Tran($str){
$data = DB::table('sessions')->where('id','2')->value('lang');
       $kq =  DB::table('langs')->where('key',$str)->value($data);
        return $kq;

    }
    public function Add($key, $eng, $vn){
        DB::table('langs')->insert([
            ['key' => $key, 'eng' => $eng, 'vn' => $vn],
        ]);

    }
    public function Test(){
        echo "hello";
    }
}
