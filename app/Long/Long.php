<?php

use Illuminate\Support\Facades\DB;
function Tran($str)
{
$da = DB::table('select_languages')->first();
if(isset($da)){
		$id = $da->id;	
		}
		elseif(!isset($da)){
			        DB::table('select_languages')->insert([
            array( 'lang' => 'eng'),
            array( 'lang' => 'vn')
        ]);
		$da = DB::table('select_languages')->first();
		$id = $da->id;
		}
	
    $data = DB::table('select_languages')->where('id', $id)->value('lang');
    $kq = DB::table('langs')->where('key', $str)->value($data);
    return $kq;

}
 function Long($str){
        $data = DB::table('select_languages')->where('id','2')->value('lang');
        $kq =  DB::table('langs')->where('key',$str)->value($data);
        return $kq;

    }
?>

