<?php
use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('hoclaravel', function (){
    echo "Chào mừng đến với khóa học Laravel";
});
Route::get('/language',['as'=>'language','uses'=>'LangController@show']);
Route::get('/language2','LangController@Lang');

Route::post('/language','LangController@changeLang');

Route::get('/delete', function () {
    Session::flush();
    return Redirect::to('/');

});
Route::group(['prefix'=>'lang'],function(){
    Route::get('show',['as'=>'lang.showLang','uses'=>'LangController@showLang']);
    Route::get('change',['as'=>'lang.changeLang','uses'=>'LangController@changeLang2']);
    Route::get('add',['as'=>'lang.getAdd','uses'=>'LangController@getAdd']);
    Route::post('add',['as'=>'lang.postAdd','uses'=>'LangController@postAdd']);
    Route::get('edit/{id}',['as'=>'lang.getEdit','uses'=>'LangController@getEdit']);
    Route::post('edit/',['as'=>'lang.postEdit','uses'=>'LangController@postEdit']);
    Route::get('delete/{id}',['as'=>'lang.getDelete','uses'=>'LangController@getDelete']);
});
Route::group(['prefix'=>'map'],function(){
    Route::get('show',['as'=>'map.showMap','uses'=>'MapController@showMap']);
    Route::get('add',['as'=>'map.getAdd','uses'=>'MapController@getAdd']);
    Route::post('add',['as'=>'map.postAdd','uses'=>'MapController@postAdd']);
    Route::get('edit/{id}',['as'=>'map.getEdit','uses'=>'MapController@getEdit']);
    Route::post('edit/',['as'=>'map.postEdit','uses'=>'MapController@postEdit']);
    Route::get('delete/{id}',['as'=>'map.getDelete','uses'=>'MapController@getDelete']);
});



Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('getMap', ['as' => 'getMap2', function () {
    if(Request::ajax()){
        return view('map_xml');
    }
    else  return view('map_xml');

    //
}]);