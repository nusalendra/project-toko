@extends('layouts.mainAdmin')

@section('content')   

<h2 style="text-align: center;">Laporan Pemesanan</h2><br>
<div class="table ms-2">
    <table class="table">
      <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Customer</th>
            <th scope="col">Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal Pemesanan</th>
            <th scope="col">Konfirmasi Barang</th>      
        </tr>
      </thead>
      <tbody>
      @foreach ($data as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->barang->name }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->barang_keluar }}</td>
            </tr>
      @endforeach
      </tbody>  
    </table>
</div>

@endsection