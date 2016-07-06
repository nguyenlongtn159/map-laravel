<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddMapRequest;
use App\Http\Requests\MapRequest;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Map;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;

class MapController extends Controller
{
    //
    public function Map(){
        return view('map');
    }
	
    public function showMap()
    {
        $query = Map::select('id','name','address','lat','lng','type')->orderBy('name','ASC')->get()->toArray();
        $content ='<?xml version="1.0" encoding="UTF-8"?><markers>';
		
        foreach ($query as $row=>$val) {
                    $content.='<marker name="'.$val["name"].'" address="'.$val["address"].'" lat="'.$val["lat"].'" lng="'.$val["lng"].'" type="'.$val["type"].'"/>';
        }
		$content.='</markers> ';
		
        Storage::disk('local')->put('file.xml', $content);
        return view('map' ,compact('query'));
    }
	
	public function getAdd(){
        return redirect()->route('map.showMap');
    }
	
    public function postAdd(MapRequest $request){
        $name = $request->input('name');
        $address = $request->input('address');
		$lat = $request->input('lat');
		$lng = $request->input('lng');
        $type = $request->input('type');
		
        $qk =  DB::table('maps')->insert([
            ['name' => $name, 'address' => $address, 'lat' => $lat, 'lng' => $lng, 'type' =>$type],
        ]);
        return redirect()->route('map.showMap');
    }
    public function getEdit($id){
        $edit = Map::select('id','name','address','lat','lng','type')->where('id', '=', $id)->get()->toArray();
        Return view('map',compact('edit'));
    } 
    public function postEdit(AddMapRequest $request){

        $id = $request->input('id');
        $name = $request->input('name');
        $address = $request->input('address');
		$lat = $request->input('lat');
		$lng = $request->input('lng');
        $type = $request->input('type');
        DB::table('maps')
           ->where('id', $id)
            ->update(['name' => $name, 'address' => $address, 'lat' => $lat, 'lng'=>$lng,'type'=>$type]);
 
        return redirect()->route('map.showMap');
    } 
    public function getDelete($id){
       // Lang::select('id','key','eng','vn')->where('id', '=', $id)->delete();
 DB::table('maps')->where('id', '=', $id)->delete();
        return redirect()->route('map.showMap');
    } 
}
