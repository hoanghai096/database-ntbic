<?php

namespace App\Http\Controllers\manager\database_manager\san_pham;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\san_pham;
use App\linh_vuc_san_pham;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $lv = linh_vuc_san_pham::all();
        $per_page = 10;
        $data = san_pham::join('linh_vuc_san_pham','san_pham.linh_vuc','=','linh_vuc_san_pham.id')->select('ten_san_pham','linh_vuc_san_pham.linh_vuc as linh_vuc','dac_diem_noi_bat','mo_ta_chung','quy_trinh_chuyen_giao','kha_nang_ung_dung','san_pham.id')->paginate($per_page);
        //print_r($data);
    	return view('database_manager.san_pham.index')->with(['datas'=>$data]);
    }
}
