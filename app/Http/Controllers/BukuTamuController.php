<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuTamuController extends Controller
{
    public function index(){
    	return view("bukutamu");
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
