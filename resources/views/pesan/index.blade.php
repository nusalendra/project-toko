@extends('layouts.main')

@section('content')

  @foreach ($data as $item)
  <div class="container" style="background-color: white; width: 75%; height: 650px; border-radius: 7px;">
    <img src="{{ url('public/Image/' . $item->image) }}" style=" width: 500px; height: 600px; margin-left: 25px; margin-top: 20px; margin-right: 20px;float: left;" class="card-img-top" alt="{{ $item->name }}">
    <div class="content" style="margin-top: 20px;">
      <br>
      <h3><strong>{{ $item->name }}</strong></h3>
      <hr>
        <h6><strong>Stock item : {{ $item->stock }}</strong></h6>
        <h6><strong>Harga : Rp. {{number_format($item->harga)}},-</strong></h6><br>
        <label for="kategori">Kategori</label>
        <select class="form-select" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
    </div>
  </div>

  <div class="container" style="background-color: white; width: 75%; height: 650px; border-radius: 7px;">
    <div class="content" style="margin-top: 20px;">
      <br>
      <h4><strong>Deskripsi Produk</strong></h4><hr>
      <h5>{!! $item->deskripsi !!}</h5>
    </div>
  </div>
  @endforeach

@endsection