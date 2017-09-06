<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function listAllPosts(){
        $posts = Post::all();//Thay cho câu query

        return view("list", ["posts" => $posts]);
    }

    public function showAddForm(){
        return view("add");
    }

    public function createPost(Request $request){
        $post = new Post();
        $post->title = $request->input("title");
        $post->content = $request->input("content");
        $post->save();
        return redirect(route("post.list"));

    }

    public function showEditForm(Request $request, $id){
        $post = Post::find($id);
        return view("edit", ["post" => $post]);
    }

    public function updatePost(Request $request, $id){
        $post = Post::find($id);
        $post->title = $request->input("title");
        $post->content = $request->input("content");
        $post->save();
        return redirect(route("post.list"));
    }

    public function showDeleteForm(Request $request, $id){
        $post = Post::find($id);
        return view("delete", ["post" => $post]);
    }

    public function deletePost(Request $request, $id){
        $post = Post::find($id);
        $post->delete();
        return redirect(route("post.list"));
    }
}
