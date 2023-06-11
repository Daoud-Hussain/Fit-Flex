<?php

namespace App\Http\Controllers;
use App\Models\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show_posts(){
        $posts = Post::all();
        return view('dashboard', ['posts'=>$posts]);
    }
}
