<?php

use Illuminate\Support\Facades\DB;
function Long($str)
{
    $data = DB::table('select_languages')->where('id', '2')->value('lang');
    $kq = DB::table('langs')->where('key', $str)->value($data);
    return $kq;

}
 function Tran($str){
        $data = DB::table('select_languages')->where('id','2')->value('lang');
        $kq =  DB::table('langs')->where('key',$str)->value($data);
        return $kq;

    }
?>

