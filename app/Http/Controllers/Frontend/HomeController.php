<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HomeAbout;
use App\Models\HomeFeatures;
use App\Models\HomeService;
use App\Models\HomeSlider;
use App\Models\HomeTestimonials;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function homeslider(){
       $slider = HomeSlider::query()
           ->where('active',1)
           ->get();
       //return response($slider);
       return $slider;
   }
   public function homeabout(){
       $about = HomeAbout::find(1);
       return $about;
   }
   public function homeservice(){
       $service = HomeService::query()->get();
       return $service;
   }
   public function homefeatures(){
       $features = HomeFeatures::query()->get();
       return $features;
   }
   public function hometestimonials(){
       $testimonials = HomeTestimonials::query()->get();
       return $testimonials;
   }


}
