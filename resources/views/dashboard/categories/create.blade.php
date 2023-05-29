@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Category</h1>
  </div>

  <div class="col-lg-8">

      <form action="/dashboard/categories" method="POST" class="mb-5">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label"> <strong> Name </strong> </label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
          @error('name')
           <div class="invalid-feedback">
            {{ $message }}
           </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label"> <strong> Slug </strong> </label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
          @error('slug')
          <div class="invalid-feedback">
           {{ $message }}
          </div>
         @enderror
        </div>
      

        
        <button type="submit" class="btn btn-primary">Create Post</button>
        <a href="/dashboard/categories" class="btn btn-danger">Cancel</a> 

      </form>


  </div>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })
  </script>

@endsection