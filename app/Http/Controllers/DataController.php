<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
    	return view ("data/data");
    }

    public function sasaran()
   {
   		return view ("data/sasaran/sasaran");
   }

   public function inputSasaran()
   {
	 /*  	$kode='STR';
	   	if (condition) {
	   		# code...
	   	}
	*/
   	return view ("/data/sasaran/input");
   }

}
