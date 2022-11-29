@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        @foreach($data as $item)
        <div class="col-md-2">
            <div class="card" style="min-width: 200px;  min-height: 310px; margin-bottom: 30px;">
            <img src="{{ url('public/Image/' . $item->image) }}" style=" width: 150px; height: 150px; margin-left: 25px; margin-top: 20px;" class="card-img-top" alt="{{ $item->name }}">
              <div class="card-body">
                <h5 class="card-title" style="text-align: left; font-size: 14px; color:black">    {{ substr(strip_tags($item->name), 0, 18) }}
                  {{ strlen(strip_tags($item->name)) > 20 ? "..." : "" }}
                </h5>
                <hr>
                <div class="card-content">
                  <p class="card-text mb-2" style="text-align: right; font-size: 12px; color:black"><strong>Rp. {{number_format($item->harga)}},-</strong></p>
                  <p class="card-text" style="text-align: right; font-size: 12px; color:black;"><strong>Stock Barang : {{ $item->stock }}</strong> </p>
                  <a href="{{ url('transaksi') }}/{{ $item->id }}" class="btn btn-success" style="margin-left: 77px; margin-right: 5px; "><i class="bi bi-file-earmark-text"></i></a><a href="" class="btn btn-dark"><i class="bi bi-bag-dash-fill"></i></a>
                </div>
              </div>
            </div>
        </div>
        @endforeach    
    </div>
</div>
@endsection