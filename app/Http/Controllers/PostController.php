<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Http\Requests\PostRequest;



class PostController extends Controller
{

    public function postShow($id) {
        $post = Post::findOrFail($id);
        return view('pages.postShow', compact('post'));
    }

    public function postCreate($id){
        $category = Category::findOrFail($id);
        return view('pages.postStore' , compact('category'));
    }

    public function postStore(PostRequest $request, $id) {
        $validatedData = $request -> validated();
        $post = Post::make($validatedData);
        $category = Category::findOrFail($id);
        $post -> category() -> associate($category);
        $post -> save();
        return redirect() -> route('home.index');
    }

    public function postEdit($id) {
        $post = Post::findOrFail($id);
        return view('pages.postEdit', compact('post'));
    }

    public function postUpdate(PostRequest $request, $id) {
        $validatedData = $request -> validated();
        $post = Post::findOrFail($id);
        $post -> update($validatedData);
        return redirect() -> route('post.show', $id);
    }

    public function postDelete($id) {
        $post = Post::findOrFail($id);
        $post -> delete();
        return redirect() -> route('home.index');
    }
}
