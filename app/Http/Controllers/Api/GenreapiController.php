<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenreapiController extends Controller
{
    function getgenre(){
        $data = array(
            'kode' => "G001",
            'name' => "Action",
            'tglsimpan' => date('Y-m-d')
        );
        return $data;
    }
}
