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
		DB::query("DELETE FROM students WHERE jid = ?",[$arr[0][0]['jid']]);

		foreach ($arr as $row) {
			foreach ($row as $stu) {
				if ($stu['name'] === '' || $stu['name'] === null) {
					continue;
				}
				DB::table('students')->insert([
					'jid' => $stu['jid'],
					'cn' => $stu['cn'],
					'name' => $stu['name'],
					'col' => $stu['col'],
					'row' => $stu['row'],
					'role' => $stu['role'],
					'type' => $stu['type'],
				]);
			}
		}

		echo true;
    }
    public function text(Request $req)
    {
    	DB::table('students')->insert([
			'jid' => '1',
			'cn' => '2',
			'name' => 'name',
			'col' => '1',
			'row' => '2',
			'role' => '3',
			'type' => 'type',
		]);
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
