@extends('layouts.mainAdmin')

@section('content')    

@if(session()->has('success'))
<div class="alert alert-success" style="text-align: center;" role="alert">
  {{ session('success') }}
</div>
@endif

<h2 style="text-align: center;">Pesanan Pelanggan</h2><br>
<div class="table ms-2">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Customer</th>
        <th scope="col">Barang</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Tanggal Pemesanan</th>
        <th scope="col">Action</th>      
      </tr>
    </thead>
    <form method="POST" action="/konfirmasi">
    <tbody>
      @foreach ($data as $index => $item)
      @csrf
      
      <input type="text" name="transaksi_id" value="{{ $item->id }}" required="required" hidden>

      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $item->user->name }}</td>
        <td>{{ $item->barang->name }}</td>
        <td>{{ $item->jumlah }}</td>
        <td>{{ $item->created_at }}</td>
        <td><button class="w-20 btn btn-lg btn-dark mt-1" type="submit">Konfirmasi</button></td>
      </tr>

      @endforeach
    </tbody>  
    </form>
  </table>
</div>
@endsection