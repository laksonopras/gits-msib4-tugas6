@extends('layouts.adminpage')
@section('mainContent')
<div class="p-3" id="product">  
    <h1 class="text-center fw-bold">Daftar Kategori</h1>
    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addCategory">Tambah Produk</button>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Kode Kategori</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Jumlah Produk</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category['id'] }}</td>
                    <td>{{ $category['category'] }}</td>
                    <td>{{ $category['product_count'] }}</td>
                    <td><a class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editCategory{{$category['id']}}" >ubah</a>
                        <div class="modal fade" id="editCategory{{$category['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Kategori</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/category/edit/{{ $category['id'] }}" >
                                        <div class="modal-body">
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td>Nama Kategori</td>
                                                    <td><input class="form-control my-3 @error('category') is-invalid @enderror" type="text" placeholder="{{ $category['category'] }}" name="category">
                                                        @error('category')
                                                            <div class="form-text">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td><a class="btn btn-danger" href="/category/delete/{{ $category['id'] }}" >hapus</a></td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/category/add" >
                <div class="modal-body">
                    <table style="width: 100%;">
                        <tr>
                            <td>Nama Kategori</td>
                            <td><input class="form-control my-3 @error('category') is-invalid @enderror" type="text" required placeholder="Nama kategori" name="category">
                                @error('category')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            <td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection