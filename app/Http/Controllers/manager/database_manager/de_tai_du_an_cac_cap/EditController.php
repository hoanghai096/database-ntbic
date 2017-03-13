<?php

namespace App\Http\Controllers\manager\database_manager\de_tai_du_an_cac_cap;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\de_tai_du_an_cac_cap;

class EditController extends Controller
{
    public function index($id){
		$result = de_tai_du_an_cac_cap::select('ten_de_tai','maso_kyhieu','linh_vuc','co_quan','nam_bat_dau','nam_ket_thuc','chu_nhiem_detai')->where('id',$id);
    	return view('database_manager.de_tai_du_an_cac_cap.edit')->with(['data'=>$result]);
	}

	public function edit_action(){
		
	}
}
