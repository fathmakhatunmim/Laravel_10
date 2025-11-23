<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
   public function __invoke(){
    return "Hello Bangladesh";
    

   }
   public function testingOne(){
    return "TESTING ONE";
   }





}
