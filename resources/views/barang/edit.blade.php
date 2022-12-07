@extends('layouts.mainAdmin')

@section('content') 

<div class="row justify-content-center">
    <div class="col-lg-4">
        <h1 class="h3 mb-3 fw-normal d-block text-center">Edit Barang</h1>
        <form method="POST" action="/barang/update" enctype="multipart/form-data">        
            @csrf            
        
            <input type="hidden" name="id" value="{{ $barang->id }}">

            <div class="form-floating mb-2">
                <input type="text" name="name" class="form-control rounded-bottom" id="name" placeholder="Nama Barang" value="{{ $barang->name }}" required autofocus >
                <label for="name" name="name">Nama Barang</label>
            </div>                                           
            
            <div class="form-floating mb-2">
                <input type="text" name="slug" class="form-control rounded-bottom" id="slug" placeholder="Nama Barang" value="{{ $barang->slug }}"" required autofocus>
                <label for="slug" name="slug">Slug</label>
            </div>

            <div class="form-floating mb-2">
                <input type="text" name="stock" class="form-control rounded-bottom" id="stock" placeholder="Stock Barang" value="{{ $barang->stock }}" required autofocus >
                <label for="stock" name="stock">Stock Barang</label>
            </div>   
            
            <div class="form-floating mb-3">
                <input type="text" name="harga" class="form-control rounded-bottom" id="harga" placeholder="Harga Barang" value="{{ $barang->harga }}" required autofocus>
                <label for="harga" name="harga">Harga Barang</label>
            </div>               
                
            <label for="kategori">Kategori</label>
            <select class="form-select form-select-lg mb-3" name="kategori_id">                                                                    
                @foreach($kategori as $item)                                                               
                        <option value="{{ $item->id }}">{{ $item->name }}</option>                    
                @endforeach
            </select>            
            
            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>

            <label for="content" name="content" class="form-label">Deskripsi</label>
            <div class="form-floating mb-3">                      
                    <input id="content" type="hidden" name="content" placeholder="Deskripsi Barang" value="{{ $barang->deskripsi }}" required autofocus>
                    <trix-editor input="content"></trix-editor>                
            </div>    
            
            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Save</button> 
            <small class="d-block text-center mt-3">Want to go back? <a href="/barang">Back</a></small>           
        </form>  
    </div>
</div>  

@endsection
