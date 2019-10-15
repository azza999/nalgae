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

    // 계좌번호 국민 700102-01-111832 이정민

}
