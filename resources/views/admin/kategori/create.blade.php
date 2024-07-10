@extends('layouts.admin')
@section('content')
<div class="col-12 col-xl-12">
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Add Kategori</h5>
            <form class="row g-3" method="POST" action="{{ route('kategori.store') }}">
                @csrf
                <div class="col-md-4x">
                    <label for="input13" class="form-label">Nama Kategori</label>
                    <div class="position-relative input-icon">
                        <input type="text" name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror" id="input13" value="{{ old('nama_kategori') }}" placeholder="Full nama_kategori" required>
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5"></i></span>
                        @error('nama_kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-4x">
                        <label for="input13" class="form-label">Slug</label>
                        <div class="position-relative input-icon">
                            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="input13" value="{{ old('slug') }}" placeholder="Full slug" required>
                            <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5"></i></span>
                            @error('slug')
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
                </div>
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-grd-primary px-4 mt-5">Submit</button>
                        <a href="{{route('kategori.index')}}" class="btn btn-grd-primary px-4 mt-5">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
