@extends('layouts.main')


@section('page-title', $comic->series)

@section('main')
   <div class="container">
      <div class="row">
         <div class="col-8 offset-2">
            <div class="card mb-3">
               <div class="show-card" style="background-image: url({{ $comic->thumb }});"></div>
               <div class="card-body">
                  <h5 class="card-title">{{ $comic->title }}</h5>
                  <p class="card-text"><strong>Series:</strong> {{ $comic->series }}</p>
                  <p class="card-text"><strong>Release date:</strong> {{ $comic->sale_date }}</p>
                  <p class="card-text"><strong>price:</strong> {{ $comic->price }}&euro;</p>
                  <p class="card-text">{{ $comic->description }}</p>
                  <p class="card-text text-capitalize"><small class="text-muted"><strong>Type:</strong>
                        {{ $comic->type }}</small></p>
                  <form action="{{route('comics.destroy' , $comic->id)}}" method='POST'>
                     @csrf
                     @method('DELETE')
                     <button  class="btn" type="submit">delete</button>      

                  </form>
                  <a href="{{ route('comics.index') }}" class="btn">back</a>
                  <a href="{{ route('comics.edit' , $comic ) }}" class="btn">edit</a>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection