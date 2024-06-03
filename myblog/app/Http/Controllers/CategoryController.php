<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
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

    public function getStore(StorePostRequest $request){

       /* $request->validate([
        'title' => 'required',
        'type' => 'required',
        'poster' => 'required',
        'content' => 'required',
       ]); */

        Post::create($request->all());
        return redirect()->route('category.index');
        /* 
        $post = new Post();
        
        $post->title = $request->title;
        $post->type = $request->type;
        $post->poster = $request->poster;
        $post->content = $request->content;
        $post->save(); 
        */

        
    }

    public function getEdit($id){
        $post = Post::findOrFail($id);

        return view('category.edit',compact('post'));
    }

    public function getUpdate(UpdatePostRequest $request, $id){

        //ver el video 20 para las validaciones de una url unica(slug)
        //ver el video 21 del curso para modificar el mensaje de error y los agributos
       /*  $request->validate([
            'title' => 'required',
            'type' => 'required',
            'poster' => 'required',
            'content' => 'required',
           ]); */

        $post = Post::findOrFail($id);
        $post->update($request->all());
        /* $post->title = $request->title;
        $post->type = $request->type;
        $post->poster = $request->poster;
        $post->content = $request->content; 
        $post->save();
        */

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
