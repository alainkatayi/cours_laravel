
@extends('base')
@section('title', 'creer un zrticle')

@section('content')
    <form action="" method="post">

        @csrf
        <div>

        <input type="text"name="title" value = " {{ old('title') }} ">
        @error('title')
            {{ $message }}
        @enderror

        </div>

       <div>
         <textarea name="content"> {{ old('title') }} </textarea>

         @error('content')
         {{ $message }}
     @enderror
        </div>

        <button type="submit">Enregistrer</button>
    </form>
@endsection

@section('content')

@endsection


