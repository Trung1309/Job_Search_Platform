<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //
    public function getCertificate($certificate_id)
    {
        $certificates = Certificate::where('id_ngon_ngu', $certificate_id)->get();
        return response()->json($certificates);
    }
}
