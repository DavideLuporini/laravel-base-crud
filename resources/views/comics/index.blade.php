@extends('layouts.main')

@section('page-title', 'Comics')

@section('main')
   <div class="container">
      <div class="row">
         @forelse ($comics as $comic)
            <div class="col-6">
               <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                     <div class="col-md-4">
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn">
                            <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title }}">
                        </a>
                     </div>
                     <div class="col-md-8">
                        <div class="card-body">
                           <h5 class="card-title">{{ $comic->title }}</h5>
                           <p class="card-text"><strong>Series:</strong> {{ $comic->series }}</p>
                           <p class="card-text"><strong>release:</strong> {{ $comic->sale_date }}</p>
                           <p class="card-text text-capitalize"><small class="text-muted"><strong>type:</strong>
                                 {{ $comic->type }}</small></p>
                           <a href="{{ route('comics.show', $comic->id) }}" class="btn btn">Discover</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
@endsection