@extends('layouts.main')

@section('content')

<div class="container" style="background-color: white; width: 75%; height: 650px; border-radius: 7px;">
  <img src="{{ url('public/Image/' . $barang->image) }}" style=" width: 500px; height: 600px; margin-left: 25px; margin-top: 20px; margin-right: 20px;float: left;" class="card-img-top" alt="{{ $barang->name }}">
  <div class="content" style="margin-top: 20px;">
    <br>
    <h3><strong>{{ $barang->name }}</strong></h3>
    <hr>
    <h6><strong>Stock Barang : {{ $barang->stock }}</strong></h6>
    <h6><strong>Harga : Rp. {{number_format($barang->harga)}},-</strong></h6>
  </div>
</div>

<div class="container" style="background-color: white; width: 75%; height: 650px; border-radius: 7px;">
  <div class="content" style="margin-top: 20px;">
    <br>
    <h4><strong>Deskripsi Produk</strong></h4><hr>
    <h5>{!! $barang->deskripsi !!}</h5>
  </div>
</div>
@endsection