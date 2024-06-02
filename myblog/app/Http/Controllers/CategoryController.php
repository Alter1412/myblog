<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function getIndex(){

        $posts = Post::orderBy('id','desc')->paginate(5);

        return view('category.index', compact('posts'));
    }

    public function getShow($id){

        $post = Post::findOrFail($id);
        
        return view('category.show',compact('post'));
    }

    public function getCreate(){
        return view('category.create');
    }

    public function getStore(Request $request){

        //return $request->all();

         $post = new Post();
        
        $post->title = $request->title;
        $post->type = $request->type;
        $post->poster = $request->poster;
        $post->content = $request->content;
        $post->save();

        //return redirect('category.index');
        return redirect()->route('category.index');
    }

    public function getEdit($id){
        $post = Post::findOrFail($id);

        return view('category.edit',compact('post'));
    }

    public function getUpdate(Request $request, $id){

        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->type = $request->type;
        $post->poster = $request->poster;
        $post->content = $request->content;

        $post->save();

        return redirect()->route('category.update', $post->id);
        
    }

    /**
     * metodos que se ususaran para mostrar u ocultar post
     */
    public function getDisabled($id){
        $post = Post::findOrFail($id);
        $post->Habilitated = false;
        $post->save();

        return redirect()->route('category.index');
    }

    public function getHabilitated($id){
        $post = Post::findOrFail($id);
        $post->Habilitated = true;
        $post->save();

        return redirect()->route('category.index');
    }

    
}
