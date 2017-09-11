<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function listAllPosts(){
        $posts = Post::with(["category"])
            ->paginate(20);//Thay cho câu query

        return view("list", ["posts" => $posts]);
    }

    public function showAddForm(){
        $categories = Category::all();
        return view("add", ["categories" => $categories]);
    }

    public function createPost(Request $request){
        $post = new Post();
        $post->title = $request->input("title");
        $post->content = $request->input("content");
        $post->category_id = $request->input("category_id");
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
