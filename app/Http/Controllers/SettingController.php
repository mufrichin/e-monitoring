<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
    	return view ("setting/setting");
    }

    public function settingTahun()
    {
    	return view ("setting/tahun");
    }
}
