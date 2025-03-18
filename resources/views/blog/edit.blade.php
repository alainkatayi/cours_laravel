
@extends('base')
@section('title', 'Modifier un article')

@section('content')
    <form action="" method="post">

        @csrf
        <div>

        <input type="text"name="title" value = " {{ old('title', $post -> title) }} ">
        @error('title')
            {{ $message }}
        @enderror

        </div>

       <div>
         <textarea name="slug"> {{ old('slug', $post -> slug) }} </textarea>

         @error('content')
         {{ $message }}
     @enderror
        </div>

        <button type="submit">Enregistrer</button>
    </form>
@endsection

@section('content')

@endsection


