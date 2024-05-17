<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;

class Locaticontroller extends Controller
{
    //
    public function indexLocation(){
        $provinces = Province::all();
        return view('location',compact('provinces'));
    }
    public function getDistricts($province_id)
    {
        $districts = District::where('id_tinh_thanh', $province_id)->get();
        return response()->json($districts);
    }

    public function getWards($district_id)
    {
        $wards = Ward::where('id_quan_huyen', $district_id)->get();
        return response()->json($wards);
    }

}
