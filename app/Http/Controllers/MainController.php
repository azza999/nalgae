<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function insert_infos(Request $req)
    {
    	print_r($req->input('arr'));
    }
    public function insert_fixed(Request $req)
    {
    	echo $req->input('student');
    }
}
