<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnimeapiController extends Controller
{
    function getanime(){
        $data = array(
            'title' => "Shingeki No kyojin",
            'total_episode' => "10 Episode",
            'studio' => "Mappa"
        );

        return $data;
    }
}
