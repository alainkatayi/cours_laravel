@extends('base')
@section('title' -> $posts -> title)

@endsection

@section('content')
<h1>Mon Blog</h1>

    <articel> 
        <h1>  {{ $posts -> title }} </h1>
        <p>
            {{ $posts -> content }}
        </p>
    </article>
@endsection


