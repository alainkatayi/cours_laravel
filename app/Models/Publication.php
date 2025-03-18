<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    //
    //ici on renseigne les propriete qui peuvent etre ajouter grace a un table
    protected $fillable = [
        'title',
        'slug',
        'content'
    ];
}
