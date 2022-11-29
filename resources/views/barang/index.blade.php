@extends('layouts.mainAdmin')

@section('content') 
<div class="createButton ms-4"><h5><a href="barang/create" class="btn btn-dark mb-3"><i class="bi bi-file-earmark-plus"></i></a></h5></div>

@if(session()->has('success'))
<div class="alert alert-success" style="text-align: center;" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table ms-2">
    <table class="table">
      <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kategori</th>
            <th scope="col">Rak</th>
            <th scope="col">Nama</th>
            <th scope="col">Stock</th>
            <th scope="col">Harga</th>
            {{-- <th scope="col">Deskripsi</th>
            <th scope="col">Image</th>       --}}
            <th scope="col">Action</th>      
        </tr>
      </thead>
      <tbody>
        @foreach($data as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->kategori->name }}</td>
                <td>{{ $item->rak->name }}</td>
                <td> {{ substr(strip_tags($item->name), 0, 20) }}
                  {{ strlen(strip_tags($item->name)) > 20 ? "..." : "" }}</td>
                <td>{{ $item->stock }}</td>                
                <td>Rp. {{ number_format($item->harga) }}</td>  
                {{-- gambar --}}
                {{-- <td>
                  <img src="{{ url('public/Image/'.$item->image) }}"
                  style="height: 100px; width: 150px;">
                </td> --}}
                <td><a href="/barang/show/{{$item->id}}" class="btn btn-success" style="margin-right: 10px;"><i class="bi bi-file-earmark-text"></i></a><a href="/barang/edit/{{$item->id}}" class="btn btn-primary" style="margin-right: 6px;" ><i class="bi bi-pencil-square"></i></a> <a href="/barang/hapus/{{$item->id}}" class="btn btn-danger" onclick="return confirm('Are you sure ?')"><i class="bi bi-file-earmark-x"></i></a></td>                    
            </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection