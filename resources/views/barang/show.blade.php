@extends('layouts.mainAdmin')

@section('content')

{{-- {{ dd($barang->image) }}    --}}
<div class="container" style="width: 75%; min-height: auto;">
  <img src="{{ url('public/Image/' . $barang->image) }}" style=" width: 300px; height: 350px; margin-left: 25px; margin-top: 20px; margin-right: 20px;float: left;" class="card-img-top" alt="{{ $barang->name }}">
  <div class="content" style="margin-top: 20px;">
    <br>
    <h3><strong>{{ $barang->name }}</strong></h3><hr>
    <h4><strong>Deskripsi Produk</strong></h4>
    <h5>{!! $barang->deskripsi !!}</h5>
    <br>
  </div>
</div>
@endsection