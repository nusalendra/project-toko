@extends('layouts.mainAdmin')

@section('content') 
<div class="createButton ms-4"><h5><a href="kategori/create" class="btn btn-dark mb-3"><i class="bi bi-file-earmark-plus"></i></a></h5></div>

@if(session()->has('success'))
<div class="alert alert-success" style="text-align: center;" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table ms-4">
    <table class="table">
      <thead>
        <tr>
            <th scope="col">No</th>            
            <th scope="col">Nama</th>   
            <th scope="col">Image</th>
            <th scope="col">Slug</th>
            <th scope="col">Action</th>      
        </tr>
      </thead>
      <tbody>
        @foreach($data as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->name }}</td>                
                <td>
                  <img src="{{ url('public/Image/'.$item->image) }}" style="height: 100px; width: 150px;">
                </td>
                <td>{{ $item->slug }}</td>
                <td><a href="/kategori/edit/{{$item->id}}" class="btn btn-primary" style="margin-right: 6px;" ><i class="bi bi-file-earmark-text"></i></a> <a href="/kategori/hapus/{{$item->id}}" class="btn btn-danger" onclick="return confirm('Are you sure ?')"><i class="bi bi-file-earmark-x"></i></a></td>                    
            </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection