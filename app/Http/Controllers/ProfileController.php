<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;

class ProfileController extends Controller
{
    //
    public function getProfile(){
        $provinces = Province::all();
        return view('Client.profile',compact('provinces'));
    }

}
