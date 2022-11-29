@extends('layouts.mainAdmin')

@section('content')

<div class="row justify-content-center">
  <div class="col-lg-4">
      <h1 class="h3 mb-3 fw-normal d-block text-center">Tambah Gudang</h1>
      <form method="POST" action="/gudang/create">        
          @csrf            

          <div class="form-floating mb-2">
          <input type="text" name="name" class="form-control rounded-bottom" id="name" placeholder="Nama Barang" required autofocus>
          <label for="name" name="name">Nama Gudang</label>
          </div>      
          
          <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Tambah</button> 
          <small class="d-block text-center mt-3">Want to go back? <a href="/gudang">Back</a></small>
      </form>           
  </div>        
</div>      

@endsection
