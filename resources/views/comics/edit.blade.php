@extends('layouts.main')

@section('page-title', 'add comic')

@section('main')
   <div class="container">
      <div class="row">
         <div class="col-12">

            <form method="POST" action="{{ route('comics.edit' , $comic) }}">
                @method('PUT')
                @csrf
               @csrf
               <div class="row text-center d-flex align-content-center justify-content-center flex-column">

                  <label for="title">Title</label>
                  <div class="col-12">
                     <input type="text" id="title" name="title" value="{{ $comic->title }}">
                  </div>

                  <label for="series">Series</label>
                  <div class="col-12">
                     <input type="text" id="series" name="series" value="{{ $comic->series }}">
                  </div>

                  <label for="img">Imagine</label>
                  <div class="col-12">
                  </div>
                     <input type="url" id="img" name="thumb" value="{{ $comic->thumb }}">
                  </div>

                  <label for="price">price</label>
                  <div class="col-12">
                     <input type="number" id="price" name="price" value="{{ $comic->price }}">
                  </div>

                  <label for="sale_date">Sale date</label>
                  <div class="col-12">
                     <input type="date" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                  </div>

                  <label for="type">Type</label>
                  <div class="col-12">
                     <select name="type" id="type">
                        {{-- @foreach ($comic->key as $key => $type)
                           <option value="{{ $comic->type }}" class="text-uppercase">{{ $key }}</option>
                        @endforeach --}}
                     </select>
                  </div>

                  <label for="description">descripton</label>
                  <div class="col-12">
                     <textarea name="description" id="description" value="{{ $comic->description }}"></textarea>
                  </div>

                  <div class="col-12 text-center">
                     <div class="h-100 w-100 d-flex justify-content-center align-items-start">
                        <button type="submit" class="btn btn-primary me-3">send</button>
                        <button type="reset" class="btn btn-warning">clear</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection