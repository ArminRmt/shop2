<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BlogController extends Controller
{


    public function __construct()
    {
       $this->middleware('auth')->except(['index', 'show']);
    }


    public function index()
    {
        // if($request->search){
        //     $posts = Post::where('title', 'like', '%' . $request->search . '%')
        //     ->orWhere('body', 'like', '%' . $request->search . '%')->latest()->paginate(4);
        // } elseif($request->category){
        //     $posts = Category::where('name', $request->category)->firstOrFail()->posts()->paginate(3)->withQueryString();
        // }
        // else{
        //     $posts = Post::latest()->paginate(4);
        // }

        // $categories = Category::all();
        $posts = Post::latest()->get();
        return view('products', compact('posts'));
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
        
        if(Post::latest()->first() !== null){
         $postId = Post::latest()->first()->id + 1;
        } else{
            $postId = 1;
        }
 
        
        $slug = Str::slug($title, '-'). '-' . $postId;
        // $user_id = Auth::user()->id;
        $body = $request->input('body');
 
        //File upload
        $imagePath = 'storage/' . $request->file('image')->store('postsImages', 'public');
 
        $post = new Post();
        $post->title = $title;
        // $post->category_id = $category_id;
        $post->slug = $slug;
        // $post->user_id = $user_id;
        $post->body = $body;
        $post->price = $price;
        $post->imagePath = $imagePath;
 
        $post->save();
        
        return redirect()->back()->with('status', 'Post Created Successfully');
     }



    //  public function show(Post $post){
    //     $category = $post->category;

    //     $relatedPosts = $category->posts()->where('id', '!=', $post->id)->latest()->take(3)->get();
    //     return view('blogPosts.single-blog-post', compact('post', 'relatedPosts'));
    // }

    public function show(Post $post){
        return view('single-blog-post', compact('post'));
    }

    // public function destroy(Post $post){
    //     $post->delete();
    //     return redirect()->back()->with('status', 'Post Delete Successfully');
    // }
}