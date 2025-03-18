<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    //creer chaque fonction pour chaque logique 
    public function index(){
        return \App\Models\Publication::get();

    }

    public function show(string $slug, string $id): RedirectResponse | Post
    {
        $posts = \App\Models\Publication::find($id);
        
        if($posts ->slug == $slug){
            return to_route('blog.show',['slug' =>$post->slug, 'id' => $post->id]);
        }
        return $posts;
    }
}
