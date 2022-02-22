<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreapiController extends Controller
{
    function getgenre(){
        $data = Genre::all();
        return $data;
    }

    function genreid($id){
        $data = Genre::find($id);
        return $data;
    }
}
