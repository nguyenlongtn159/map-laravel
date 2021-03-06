<?php
namespace App\Http\Controllers;

use App\Http\Requests\AddLangRequest;
use App\Http\Requests\LangRequest;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use App\Lang;
use App\Select_language;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
/**
 * Created by PhpStorm.
 * User: protnpl
 * Date: 22/06/2016
 * Time: 6:50 PM
 */
class LangController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
public function show(){

    return view('lang');
}
public function test(Request $request){
	        $items = Lang::orderBy('id','DESC')->paginate(5);
        return view('test',compact('items'))->with('i', ($request->input('page', 1) - 1) * 5); //lấy giá trị ?page=xxx, default= 1; rùi - 1 , nhân 5 để tính Item
}
    public function Lang(){
    //  $data = DB::table('langs')->where('key','home')->value('vn');
        //DESC
        $la = Lang::select('id','key','eng','vn')->orderBy('key','ASC')->get()->toArray();
        $se = Select_language::select('id','lang')->get()->toArray();
        Return view('lang',compact('la','se'));

    }
    public  function changeLang(Request $request)
    {
        $lang = $request->input('lang');
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
		
		
   
        DB::table('select_languages')
            ->where('id', $id)
            ->update(['lang' => $lang]);
        return redirect('lang/change');
    }
        public function showLang(){
            $la = Lang::select('id','key','eng','vn')->orderBy('key','ASC')->get()->paginate(15)->toArray();
            $se = Select_language::select('id','lang')->get()->toArray();
            Return view('lang',compact('la','se'));

        }
    public function changeLang2(){
        Return view('changelang');
    }

    public function getAdd(){
        return redirect()->route('lang.showLang');

    }
    public function postAdd(LangRequest $request){
        $key = $request->input('key');
        $eng = $request->input('eng');
        $vn = $request->input('vn');
      $qk =  DB::table('langs')->insert([
            ['key' => $key, 'eng' => $eng, 'vn' => $vn],
        ]);
        return redirect()->route('lang.showLang');
    }
    public function getEdit($id){
        $lang2 = Lang::select('id','key','eng','vn')->where('id', '=', $id)->get()->toArray();
        Return view('lang',compact('lang2'));
    }
    public function postEdit(AddLangRequest $request){

        $id = $request->input('id');
        $key = $request->input('key');
        $eng = $request->input('eng');
        $vn = $request->input('vn');
        DB::table('langs')
           ->where('id', $id)
            ->update(['key' => $key, 'eng' => $eng, 'vn' => $vn]);
        $la = Lang::select('id','key','eng','vn')->orderBy('key','ASC')->get()->toArray();
        $se = Select_language::select('id','lang')->get()->toArray();
        return redirect()->route('lang.showLang');

    }
    public function getDelete($id){
        Lang::select('id','key','eng','vn')->where('id', '=', $id)->delete();
        $la = Lang::select('id','key','eng','vn')->orderBy('key','ASC')->get()->toArray();
        $se = Select_language::select('id','lang')->get()->toArray();
        return redirect()->route('lang.showLang');
    }

}
