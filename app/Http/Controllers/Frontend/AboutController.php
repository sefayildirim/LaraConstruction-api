<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutService;
use App\Models\AboutTeam;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $about = About::find(1);
        return $about;
    }
    public function aboutservice(){
        $service = AboutService::all();
        return $service;
    }
    public function aboutteam(){
        $team = AboutTeam::all();
        return $team;
    }
}
