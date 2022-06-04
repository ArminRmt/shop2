<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    public function index()
    {
        return view('products');
    }

    public function create(){
        // $categories = Category::all();
        // return view('blogPosts.create-blog-post', compact('categories'));
        return view('create-blog-post');
    }

    public function store(Request $request){
        
        $request->validate([
            'title' => 'required',
            'image' => 'required | image',
            'body' => 'required',
            'price' => 'required',
            // 'category_id' => 'required'
        ]);
        
        $title = $request->input('title');
        $price = $request->input('price');
        // $category_id = $request->input('category_id');
        
        // if(Post::latest()->first() !== null){
        //  $postId = Post::latest()->first()->id + 1;
        // } else{
        //     $postId = 1;
        // }
 
        // $slug = Str::slug($title, '-') . '-' . $postId;
        // $user_id = Auth::user()->id;
        $body = $request->input('body');
 
        //File upload
        $imagePath = 'storage/' . $request->file('image')->store('postsImages', 'public');
 
        // $post = new Post();
        // $post->title = $title;
        // $post->category_id = $category_id;
        // $post->slug = $slug;
        // $post->user_id = $user_id;
        // $post->body = $body;
        // $post->imagePath = $imagePath;
 
        // $post->save();
        
        // return redirect()->back()->with('status', 'Post Created Successfully');
        dd('s.th');
     }
}