@extends('layouts.main')

@section('page-title', 'add comic')

@section('main')
   <div class="container">
      <div class="row">
         <div class="col-12">

            <form method="POST" action="{{ route('comics.store') }}">
               @csrf
               <div class="row text-center d-flex align-content-center justify-content-center flex-column">

                  <label for="title">Title</label>
                  <div class="col-12">
                     <input type="text" id="title" name="title">
                  </div>

                  <label for="series">Series</label>
                  <div class="col-12">
                     <input type="text" id="series" name="series">
                  </div>

                  <label for="img">Imagine</label>
                  <div class="col-12">
                     <input type="url" id="img" name="thumb">
                  </div>

                  <label for="price">price</label>
                  <div class="col-12">
                     <input type="number" id="price" name="price">
                  </div>

                  <label for="sale_date">Sale date</label>
                  <div class="col-12">
                     <input type="date" id="sale_date" name="sale_date">
                  </div>

                  <label for="type">Type</label>
                  <div class="col-12">
                     <select name="type" id="type">
                        @foreach ($comic_type as $key => $type)
                           <option class="text-uppercase">{{ $key }}</option>
                        @endforeach
                     </select>
                  </div>

                  <label for="description">descripton</label>
                  <div class="col-12">
                     <textarea name="description" id="description"></textarea>
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