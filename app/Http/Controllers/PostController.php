<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // dd(Request('search'));
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = "in $category->name";
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'By ' . $author->name;
        }
        return view('posts', [
            "title" => "All Posts $title",
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }
    //Dengan route model binding
    //bisa mencari berdasarkan key selain id
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }


    //Hanya bisa menangkap berdasarkan id
    // public function show($slug)
    // {
    //     return view('post', [
    //         "title" => "Single Post",
    //         "post" => Post::find($slug)
    //     ]);
    // }
}
