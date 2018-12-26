<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;

class CrawlController extends Controller
{
   public function index(){
   		$font=storage_path('app\public\fonts\kaushan.otf');
   		if(file_exists($font)){
   			return "yes";
   		}
   }
}
