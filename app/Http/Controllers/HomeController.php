<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show_posts(){
        return view('home');
    }

    public function show_about(){
        return view('about');
    }

    public function show_contact(){
        return view('contact');
    }

    public function join_now(){
        return view('joinnow');
    }
}
