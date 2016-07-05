<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
/**
 * Created by PhpStorm.
 * User: protnpl
 * Date: 22/06/2016
 * Time: 6:50 PM
 */
class WelcomeController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    public function showInfo()
    {
        return view('thongtin');
    }

    public function lang(){

        return view('lang');
    }
}