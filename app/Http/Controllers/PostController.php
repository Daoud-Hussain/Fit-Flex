<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = $request->user();
        $post = new Post;
        $post->timings = $request->timings;
        $post->body  = $request->body;
        $user->post()->save($post);
        return redirect(route('post_index'))->with('status', 'Record Added Successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {   
        $post = Post::find($id);
        return view('editpost', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $post = Post::find($id);
        $post->timings = $request->timings;
        $post->body  = $request->body;
        $post->save();
        return redirect(route('dashboard'))->with('status', 'Record Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Post::destroy($id);
        return redirect(route('dashboard'))->with('status', 'Record Deleted Successfully.');
    }
}
