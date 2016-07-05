<?php

use Illuminate\Support\Facades\DB;
function Long($str)
{
    $data = DB::table('sessions')->where('id', '2')->value('lang');
    $kq = DB::table('langs')->where('key', $str)->value($data);
    return $kq;

}
 function Tran($str){
        $data = DB::table('sessions')->where('id','2')->value('lang');
        $kq =  DB::table('langs')->where('key',$str)->value($data);
        return $kq;

    }
?>

