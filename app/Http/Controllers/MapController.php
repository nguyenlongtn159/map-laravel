<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Map;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MapController extends Controller
{
    //
    public function Map(){

        return view('map');
    }
    public function showMap()
    {
        $content = "<bar>";
        $data = "<bar>";
       // $content = View::make('xml.index', $data)->render();
        $query = Map::select('id','name','address','lat','lng','type')->orderBy('name','ASC')->get()->toArray();
     /*   $dom = new DOMDocument("1.0", 'UTF-8');
        $node = $dom->createElement("markers");
        $parnode = $dom->appendChild($node);
        $xmlRoot = $dom->createElement("xml");


        header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

        foreach($query as $row){



            // ADD TO XML DOCUMENT NODE
            $node = $dom->createElement("marker");
            $newnode = $parnode->appendChild($node);
            $newnode->setAttribute("name",$row['name']);
            $newnode->setAttribute("address", $row['address']);
            $newnode->setAttribute("lat", $row['lat']);
            $newnode->setAttribute("lng", $row['lng']);
            $newnode->setAttribute("type", $row['type']);

        }
        $content = $dom->saveXML();
     */
        $content ='<?xml version="1.0" encoding="UTF-8"?>
<markers>';
        foreach ($query as $row=>$val) {
                    $content.='
                    <marker name="'.$val["name"].'" address="'.$val["address"].'" lat="'.$val["lat"].'" lng="'.$val["lng"].'" type="'.$val["type"].'"/>
                ';
        }
$content.='</markers> ';
        Storage::disk('local')->put('file.xml', $content);
        return view('map');
       // File::put(storage_path() . '{!! url("/public/xml/file.xml") !!}', $content);

      //  return Response::make($content, 200)->header('Content-Type', 'application/xml');
        /*   File::put(storage_path().'{!! url("/public/xml/file.xml") !!}', $content);
           if(Request::ajax()){


               return view('map_xml');
           }
         else  return view('map_xml');
       } */
    }
}
