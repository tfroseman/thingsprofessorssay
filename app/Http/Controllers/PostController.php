<?php
namespace App\Http\Controllers;


use App\Post;
use Illuminate\Support\Facades\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;



class PostController extends Controller {

    public function new_post(){
        return view('post.new');
    }

    public function show($id){
        $post = Post::findOrFail($id);

        return view('post.post', compact('post'));
    }

    public function store(){
        $input = Request::all();

        Post::create($input);

        return redirect('/');
    }

    public function index(){
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

}