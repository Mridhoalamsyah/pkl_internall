@extends('layouts.admin')
@section('content')
<div class="col-12 col-xl-12">
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Add Produk</h5>
            <form class="row g-3" method="POST" action="{{ route('produk.store') }}"enctype="multipart/form-data">
                @csrf
                <div class="col-md-4x">
                    <label for="input13" class="form-label">Nama Produk</label>
                    <div class="position-relative input-icon">
                        <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" id="input13" value="{{ old('nama_produk') }}" placeholder="Full nama_produk" required>
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5"></i></span>
                        @error('nama_produk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                        <div class="col-md-4x">
                            <label for="input13" class="form-label">Description</label>
                            <div class="position-relative input-icon">
                                <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="input13" value="{{ old('deskripsi') }}" placeholder="Full deskripsi" required>
                                <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5"></i></span>
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4x">
                                <label for="input13" class="form-label">Price</label>
                                <div class="position-relative input-icon">
                                    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="input13" value="{{ old('price') }}" placeholder="Full price" required>
                                    <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5"></i></span>
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4x">
                                    <label for="input13" class="form-label">Stock_quantity</label>
                                    <div class="position-relative input-icon">
                                        <input type="text" name="stock_quantity" class="form-control @error('stock_quantity') is-invalid @enderror" id="input13" value="{{ old('stock_quantity') }}" placeholder="Full stock_quantity" required>
                                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5"></i></span>
                                        @error('stock_quantity')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4x">
                                        <label for="input13" class="form-label">Image</label>
                                        <div class="position-relative input-icon">
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="input13" value="{{ old('image') }}" placeholder="Full image" required>
                                            <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5"></i></span>
                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                            @csrf
                                           <div class="mb-3">
                                      <label class="form-label">Kategori</label>
                                              <select name="kategori_id" class="form-control">
                                                <option value=""> Data Belum Tersedia</option>
                                                @foreach ($kategori as $data)
                                                <option value="{{ $data->id }}" @error('kategori_id') is-invalid @enderror>
                                                  {{ $data->nama_kategori}}
                                                </option>
                                                @endforeach
                                              </select>
                                          </div>
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                        <a href="{{route('produk.index')}}" class="btn btn-grd-primary px-4">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
