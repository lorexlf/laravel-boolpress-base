@extends('layouts.layout')

@section('main')

<div class="container mt-5">
   <div class="row">
      <div class="col mb-4">
         <h5 class="title">{{$post->title}}</h5>
         <img src="{{$post->img}}" class="post-img" alt="...">
         <p>{{$post->text}}</p>
         <form action="{{route('posts.destroy', $post->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm mt-2">Elimina</button>
         </form>
      </div>
   </div>
</div>

@endsection