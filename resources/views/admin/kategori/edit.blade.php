@extends('layouts.admin')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{route('kategori.index')}}" class="btn btn-sm btn-primary">Back</a>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('kategori.update', $kategori->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Name kategori</label>
                <input type="text" name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror"
                    placeholder="nama_kategori" value="{{$kategori->nama_kategori}}">
                @error('nama_kategori')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">slug</label>
                <input type="slug" name="slug" class="form-control @error('slug') is-invalid @enderror"
                    placeholder="slug" value="{{$kategori->slug}}">
                @error('slug')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">deskripsi</label>
                <input type="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                    placeholder="deskripsi">
                @error('deskripsi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-4">
                <div class="mb-3">
                    <label for="" class="form-label">Role</label>
                    <select name="isAdmin" id="" class="form-control @error('isAdmin') is-invalid @enderror">
                        <option value="1" {{$kategori->isAdmin == 1 ? 'selected' : ''}}>Admin</option>
                        <option value="0" {{$kategori->isAdmin == 0 ? 'selected' : ''}}>kategori</option>
                    </select>
                    @error('isAdmin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="btn btn-sm btn-primary" type="submit">Submit</button> |
                    <button class="btn btn-sm btn-warning" type="reset">Cancel</button>
                </div>
        </form>
    </div>
</div>
@endsection
