@extends('layouts.main')

@section('content')

<div class="container">
  <div class="row justify-content-center mt-5">
      @foreach($data as $item)
      <div class="col-md-2">
        <a href="/barang/kategori/{{ $item->slug }}" style="text-decoration: none;">
          <div class="card" style="min-width: 200px;  min-height: 140px; margin-bottom: 30px; border-radius: 7px;">
          <img src="{{ url('public/Image/' . $item->image) }}" style=" width: 150px; height: 140px; margin-left: 25px; margin-top: 20px;" class="card-img-top" alt="{{ $item->name }}">
        
            <div class="card-body">
              <h5 class="card-title" style="text-align: left; font-size: 14px; color:black; text-align: center;">{{ $item->name }}</h5>
            </div>
        </a>
          </div>
      </div>
      @endforeach    
  </div>
</div>

@endsection