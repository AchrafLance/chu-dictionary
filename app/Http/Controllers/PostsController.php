<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 


class PostsController extends Controller
{

    

    public function index(){
        $posts = Post::get(); 
        return view('main.pages.dictionnaire', ['posts'=>$posts        ]
    );
    }

    public function showall(){
        $posts = Post::get(); 
        return view('main.pages.allPosts', ['posts'=>$posts]);
    }

    public function addpost(Request $request){
        // add post to db 
        // dd(auth()->id());

        $this->validate($request, [
            'body'=>'required', 
            'name'=> 'required', 
            'source'=>'required' 
        ]); 

        auth()->user()->posts()->create([
            'body' => $request->body, 
            'name' =>$request->name, 
            'source' => $request->source
        ]); 

        return back(); 
    }

    public function viewPost($id){
        $post = Post::find($id); 
        return view('main.pages.singlePost', ['post'=> $post]);
    }

    public function editPost($id){
        dd('editing post ' . $id); 

    }

    public function deletePost($id){
        Post::find($id)->delete(); 
        
    }

    public function likePost($id){
        dd("like post of id: " . $id );
    }
}
