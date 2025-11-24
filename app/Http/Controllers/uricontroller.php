<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uricontroller extends Controller
{
    public function index(Request $request){
        $path = $request->path();
        echo 'path method:'.$path;
        echo'<br>';
        
         $url = $request->url();
        echo 'url method:'.$url;
        echo'<br>';





    }
}
