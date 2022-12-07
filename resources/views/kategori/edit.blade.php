@extends('layouts.mainAdmin')

@section('content')

<div class="row justify-content-center">
  <div class="col-lg-4">
    <h1 class="h3 mb-3 fw-normal d-block text-center">Edit Kategori</h1>
    <form method="POST" action="/kategori/update" enctype="multipart/form-data">        
        @csrf            

      <input type="hidden" name="id" value="{{ $kategori->id }}">

      <div class="form-floating mb-2">
        <input type="text" name="name" class="form-control rounded-bottom" id="name" value="{{ $kategori->name }}" placeholder="Nama Barang" required autofocus>
        <label for="name" name="name">Nama Kategori</label>
      </div>

      <div class="form-floating mb-2">
          <input type="text" name="slug" class="form-control rounded-bottom" id="slug" placeholder="Nama Barang" value="{{ $kategori->slug }}"" required autofocus>
          <label for="slug" name="slug">Slug</label>
      </div>
        
      <div class="mb-3">
          <label for="image" class="form-label">Post Image</label>
          <input class="form-control" type="file" id="image" name="image">
      </div>
                  
        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Save</button>
        <small class="d-block text-center mt-3">Want to go back? <a href="/kategori">Back</a></small>
    </form>           
  </div>        
</div>      

@endsection
