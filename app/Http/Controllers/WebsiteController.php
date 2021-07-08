<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WebsiteController extends Controller
{
    public function services(){
        return view('smile.services');
    }
    public function media(){

        $news = DB::table('news')
        ->select('*')
        ->where('is_active', '1')
        ->where('is_deleted', '0')
        ->orderBy('published_on', 'DESC')->get();

     //  return view('smile.website', $news);

        return view('smile.media', compact('news'));
    }
    public function aboutus(){
        return view('smile.aboutus');
    }
    public function contactus(){
        return view('smile.contactus');
    }
    public function careers(){

        $carrer = DB::table('careers')
        ->select('*')
        ->where('is_active', '1')
        ->get();
        return view('smile.careers', compact('carrer'));

    }
    public function home_main(){
         $news = DB::table('news')
         ->select('*')
         ->where('is_active', '1')
         ->where('is_deleted', '0')
         ->orderBy('published_on', 'DESC')->get();

        //dd($news);
        return view('smile.website', $news);
    }
    public function nigeria(){
        return view('smile.nigeria');
    } 
     public function uganda(){
        return view('smile.uganda');
    }
    public function tanzania(){
        return view('smile.tanzania');
    }
    public function brc(){
        return view('smile.brc');
    }
    public function careerdetails(){
        return view('smile.career_details');
    }
    
    public function show() {
        $news = DB::table('news')
        ->select('*')
        ->where('is_active', '1')
        ->where('is_deleted', '0')
        ->orderBy('published_on', 'DESC')->get();

        return view('smile.website', compact('news'));
    }
    
}
