<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderby("created_at", "desc")->paginate(10);
        return view("pages.index")->with("post", $post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->user()->id;
        return view("pages.create")->with("user", $user_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
             'title' => 'required|max:50',
             'body' => 'required',
             'user_id' => 'required|integer',
             'image' => 'required|mimes:jpg,jpeg,png|max:5020',
        ]);
        
         $newImageName = time() . "-" . $request->name . "." . $request->image->extension();
         $request->image->move(public_path("images"), $newImageName);
         
         $post = new Post();
         $post->title = $request->input("title");
         $post->body = $request->input("body");
         $post->user_id = $request->input("user_id");
         $post->image_path = $newImageName;
         $post->save();
         
         return redirect()->route("index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view("pages.show")->with("post", $post);
    }
    
    
    
    public function search(Request $req)
    {
    	$post = Post::where('title', 'like', '%'.$req->input("query").'%')->get();
    	return view("pages.search")->with("post", $post);
    }
    
    public function about(){
       return view("pages.about");
    }
    
    public function contact(){
       return view("pages.contact");
    }
}