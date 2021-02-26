<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsApiController extends Controller
{

    // Secure this with Auth automatically
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Check if user is authenticated
    public function checkIfUserIsAuth() {
        if(auth()->check()){
            // If the user is authenticated
        } else {
            // Else the user is NOT authenticated
        }
    }

    // Get current authenticated user
    public function getCurAuthUser() {
        return auth()->user();
    }

    // Only return 100 records, quickview
    public function index() {
        return Post::all()->take(100);
    }

    // Insert a new post record
    public function insert() {

        request()->validate([
            'title' => 'required',
            'post_author' => 'required',
            'category' => 'required',
            'html_content' => 'required'
        ]);

        return Post::create([
            'title' => request('title'),
            'post_author' => request('post_author'),
            'category' => request('category'),
            'html_content' => request('html_content'),
        ]);

    }

    // Update a post record
    public function update(Post $post) {

        request()->validate([
            'title' => 'required',
            'post_author' => 'required',
            'category' => 'required',
            'html_content' => 'required'
        ]);

        $success = $post->update([
            'title' => request('title'),
            'post_author' => request('post_author'),
            'category' => request('category'),
            'html_content' => request('html_content'),
        ]);

        return Response(['success'=> $success,'post_object'=> $post], 200);

    }

    // Delete a post record
    public function delete(Post $post) {

        request()->validate([
            'title' => 'required',
            'post_author' => 'required',
            'category' => 'required',
            'html_content' => 'required'
        ]);

        $success = $post->delete();

        return Response(['success'=> $success,'post_object'=> $post], 200);

    }

}
