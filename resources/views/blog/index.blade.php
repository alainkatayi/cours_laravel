@extends('base')
@section('title')
Monn Blog
@endsection

@section('content')
<h1>Mon Blog</h1>

@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
@endforeach

<p>

    <a href="{{ route('blog.show',['slug' => $post -> slug , 'id' => $post -> id]) }}"    class = "btn btn-primary" >Lire la  suite </a>   

</p>

{{ $posts->links() }}

@dump($posts)
@endsection


