<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function insert_infos(Request $req)
    {
    	$arr = $req->input('arr');
    	foreach ($arr as $row) {
    		echo "asd";
    		foreach ($row as $stu => $value) {
	    		DB::table('students')->insert([
	    			'jid' => $stu->jid,
	    			'cn' => $stu->cn,
	    			'name' => $stu->name,
	    			'col' => $stu->col,
	    			'row' => $stu->row,
	    			'role' => $stu->role,
	    			'type' => $stu->type,
	    		]);
    		}
    	}
    }
    public function insert_fixed(Request $req)
    {
    	echo $req->input('student');
    }
    public function get_jd(Request $req, $num)
    {
    	$arr = DB::select("SELECT * FROM students WHERE jid = ?",[$num]);
    	print_r($arr);
    }

    // 계좌번호 국민 700102-01-111832 이정민

}
