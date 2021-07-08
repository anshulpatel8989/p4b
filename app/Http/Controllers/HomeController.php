<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Log;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       

        // //News List
        // $news = DB::table('news')
        //                     ->select('*')
        //                     ->where('is_active', '1')
        //                     ->where('is_deleted', '0')
        //                     ->orderBy('published_on', 'DESC')
        //                     ->limit('4')->get();

       
      
    }
}
