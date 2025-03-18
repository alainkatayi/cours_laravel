<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Post;
use App\Http\Requests\CreatePublicationRequest;

class PublicationController extends Controller
{
    //creer chaque fonction pour chaque logique 
    /*public function index(){
        return \App\Models\Publication::get();

    }*/



    public function index(): view
    {

        //$post = ;
        return view('blog.index',[
            'posts' => \App\Models\Publication::paginate(1)
        ]); 
        
    }


    public function show(string $slug, string $id): RedirectResponse | View
    {
        $posts = \App\Models\Publication::findOrFail($id);
        
        if($posts ->slug != $slug){
            return to_route('blog.show',['slug' =>$posts->slug, 'id' => $posts->id]);
        }
        return view("blog.show", [
            'post' => $posts
        ]);
    }

    public function new() {
        return view('blog.new');
    }


    //creer une fonction pour enregistrer les donnees
    public function store(CreatePublicationRequest $request){
        $post = \App\Models\Publication::create(
            $request->validated()
        );
        return redirect()->route('blog.index')->with('success', "Votre article a bien été enregistré");
    }

    public function edit(Post $post): View
    {
        return view('blog.edit', [
            'post' => $post
        ]);
    }

    public function update(CreatePublicationRequest $request, Post $post): RedirectResponse
    {
        $post->update(
            $request->validated()
        );
        return redirect()->route('blog.index')->with('success', "Votre article a bien été modifié");
    }
}
