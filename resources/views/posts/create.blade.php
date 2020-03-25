@extends('layouts.layout')

@section('main')

<div class="container py-5 text-center">

   <div class="col">

      @if($errors->any())
      <div class="alert alert-danger text-left">
         <ul class="px-2">
         @foreach($errors->all() as $error)
            <li>{{$error}}</li>
         @endforeach
         </ul>
      </div>
      @endif
   
      <form action="{{(!empty($post)) ? route('posts.update', $post->id) : route('posts.store')}}" method="POST">
      
         @csrf
         @if(!empty('$post'))
            @method('PATCH')
               @else
                  @method('POST')
         @endif

         <div class="form-group">
            <div class="row">
               <div class="col-12 mb-4">
                  <label for="name">Immagine</label>
                  <input type="text" class="form-control" name="img" aria-describedby="textHelp" value="{{(!empty($post)) ? $post->img : ''}}">
               </div>

               <div class="col-12 mb-4">
                  <label for="lastname">Titolo</label>
                  <input type="text" class="form-control" name="title" aria-describedby="textHelp" value="{{(!empty($post)) ? $post->title : ''}}">
               </div>

               <div class="col-12 mb-4">
                  <label for="age">Testo</label>
                  <input type="text" class="form-control" name="text" aria-describedby="textHelp" value="{{(!empty($post)) ? $post->text : ''}}">
               </div>

            </div>
         </div>
      
         @if(!empty($post))
         <input type="hidden" name="id" value="{{$post->id}}" class="btn btn-dark">
         @endif

         <button type="submit" class="btn btn-dark">{{(!empty($post)) ? 'Aggiorna' : 'Aggiungi'}}</button>

      </form>
   
   </div>

</div> <!-- / container -->

@endsection
