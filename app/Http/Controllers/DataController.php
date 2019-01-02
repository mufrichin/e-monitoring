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

   public function indikator()
   {
   	return view ("data/indikator/indikator");
   }

   public function unit()
   {
   	return view ("data/unit/unit");
   }

   public function periode()
   {
   	return view ("data/periode/periode");
   }

   public function inputSasaran()
   {
	return view ("/data/sasaran/input");
   }

   public function inputIndikator()
   {
	return view ("/data/indikator/input");
   }

   public function inputUnit()
   {
	return view ("/data/unit/input");
   }

   public function inputPeriode()
   {
	return view ("/data/periode/input");
   }

}
