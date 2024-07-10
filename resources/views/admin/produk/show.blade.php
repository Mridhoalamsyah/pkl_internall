@extends('layouts.admin')

@section('styles')
@endsection
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@section('content')
<div class="breadcrumb_section bg_gray page-title-mini">
    <!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-start">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">Admin</a></li>
                    <li class="breadcrumb-item active"><a href="{{url('/admin/product')}}">Product</a></li>
                    <li class="breadcrumb-item active"><a href="">Show</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END CONTAINER-->
<!--end breadcrumb-->
<div class="container">
        <div class="col-md">
            <div class="card mb-3">
                <div class="row g-0">
                    @if ($product->cover_image)
                        <img class="card-img card-img-left" src="{{ asset('storage/' . $product->cover_image) }}"
                            alt="{{ $product->name }} Cover Image" style="width: 30%; height: auto; max-height: 300px;" />
                    @else
                        <img class="card-img card-img-left" src="{{ asset('assets/img/elements/12.jpg') }}"
                            alt="Default Image" style="width: 100%; height: auto; max-height: 200px;" />
                    @endif
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p>
                                Price : {{ $product->price }}
                            </p>
                            <p>
                                Stok : {{ $product->stok }}
                            </p>
                            <p class="card-text">
                                Deskripsi {!! $product->desc !!}
                            </p>
                            <p class="card-text"><small class="text-muted">{{ $product->created_at }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3>Images</h3>
        @if ($product->image->count() > 4)
        <div id="productImageCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($product->image->chunk(4) as $chunkIndex => $chunk)
                    <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                        <div class="row">
                            @foreach ($chunk as $data)
                                <div class="col-md-3">
                                    <img src="{{ asset('storage/products/' . $data->image_product) }}" class="w-100 rounded" style="height: 10rem">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#productImageCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#productImageCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    @else
        <div class="row">
            @foreach ($product->image as $data)
                <div class="col-md-3">
                    <img src="{{ asset('storage/products/' . $data->image_product) }}" class="w-100 rounded" style="height: 10rem">
                </div>
            @endforeach
        </div>
    @endif
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
