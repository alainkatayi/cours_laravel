<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Grouper des route s'ils ont un meme prefixe apr exemple
//on definis le preixe blog, ce qui veut dire = que chaque riute qui se trouve dans ce groupe commencera par blog, donc pas besoin de definir encore le (/blog) pour ces routes
Route::prefix('/blog')->name('blog.') ->group(function(){
    Route::get('/' , [\App\Http\Controllers\PublicationController::class, 'index']

    //return 'Bonjour Laravel';


    //$pub = new \App\Models\Publication(); //creation d'un nouvel i=objet a partit du model
    //$pub -> title = 'Mon deuxieme3 artcile';//donner un title
    //$pub -> slug = 'Mon deuxieme3  artcile';//donner un slug
    //$pub -> content = 'ce ci est mon tout deuxieme content';//donner un content
    //$pub -> save();  //enregiste dans la database
    //return $pub;
    //dd($pub);


    //$pub = \App\Models\Publication::paginate(1); //faire une pagination
    //return $pub;


    //$pub = \App\Models\Publication::where('id', '>' , 0) ->get(); //on place une condition pour ne recuperer que l'id qui est superieur a 0 et recuperer le tout
    //dd($pub);



        //return \App\Models\Publication::all() ; //return tout le contenu du model
        //return \App\Models\Publication::all(['id', 'title']) ; //return seulement l'id et le title

        
        //pour pouvoir modifier le contenu d'une table

        //$post =\App\Models\Publication::find(1); //il faut commencer par selectionner l'element;
        //$post->title = 'Nouveau title'; //choisir l'attribut a modifier et lui donner la nouvelle valeur
       // $post -> save(); //enregistrer 
        //dd($post);



        //il existe aussi une methode beaucoup plus simple pour remplir notre base de donnes (la creation)

        //Cependant cette methode ne peut marcher que si cela a etait specifié dans le model qu'il peutvent etre rempli sous forme de tableau. Dans le cas contraire, ca ne marchera pas

        //$post = \App\Models\Publication::create([
            //'title' => 'Mon nouveau title',
            //'slug' => 'Mon autre nouveau titre',
            //'content' => 'autre content' 
        //]);

        //dd($post);



        //return [
            //"name" => $request ->all(),
            //"article" => "Article 1"
            //"link" => \route('blog.index', ['slug' => 'article', 'id' => 13])
        //];
    ) ->name('index');
    
    Route::get('/{slug}-{id}', [\App\Http\Controllers\PublicationController::class, 'show']


        
        //return [
            //"slug" => $slug,
            //"id" => $id,
    
    
       // ];
    ) ->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+',
    
    ]) ->name('show') ;
});


//ici chaque route est definis de maniere separer, contrairement a ce qui est fait juste au dessus

//create route for blog 
/*Route::get('/blog' , function(Request $request){
    //return 'Bonjour Laravel';
    return [
        //"name" => $request ->all(),
        //"article" => "Article 1"
        "link" => \route('blog.index', ['slug' => 'article', 'id' => 13])
    ];
}) ->name('blog.index');

Route::get('/blog/{slug}-{id}', function( string $slug, string $id){
    return [
        "slug" => $slug,
        "id" => $id,


    ];
}) ->where([
    'id' => '[0-9]+',
    'slug' => '[a-z0-9\-]+',

]) ->name('blog.show') ;
 */
