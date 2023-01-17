@extends('layouts.main')

@section('content')

  <form method="POST" action="/pesan/barang">
    @csrf
    @foreach ($data as $item)
    <div class="container" style="background-color: white; width: 75%; height: 650px; border-radius: 7px;">
      <img src="{{ url('public/Image/' . $item->image) }}" style=" width: 500px; height: 600px; margin-left: 25px; margin-top: 20px; margin-right: 20px;float: left;" class="card-img-top" alt="{{ $item->name }}">
      <div class="content" style="margin-top: 20px;">
        <br>
        <h3><strong>{{ $item->name }}</strong></h3><hr>
        <h6><strong>Stock item : {{ $item->stock }}</strong></h6>
        <h6><strong>Harga : Rp. {{number_format($item->harga)}},-</strong></h6><br>

        <input type="text" name="barang_id" value="{{ $item->id }}" hidden>
        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
        
        <label for="jumlah">Pesan</label>
          <select class="form-select form-select-lg mb-3" style="width: 200px;" name="jumlah" id="jumlah">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
          </select> 
        <button class="w-20 btn btn-lg btn-primary mt-4" type="submit">Beli</button>            
      </div>
    </div>
  </form>
  
    <div class="container" style="background-color: white; width: 75%; height: 650px; border-radius: 7px;">
      <div class="content" style="margin-top: 20px;">
        <br>
        <h4><strong>Deskripsi Produk</strong></h4><hr>
        <h5>{!! $item->deskripsi !!}</h5>
      </div>
    </div>
    @endforeach
@endsection