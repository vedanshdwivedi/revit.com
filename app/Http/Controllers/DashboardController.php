<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Product;
use App\User;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user_id = auth()->user()->id;
        //$reviews = Review::;
        //return count($reviews);
        //return view('dashboard')->with('reviews', $reviews);
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $products = Product::all();
        return view('dashboard')->with('reviews', $user->review);
    }

    public function create(){
        return view('create');
    }
}
