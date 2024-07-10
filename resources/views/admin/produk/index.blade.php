
@extends('layouts.admin')
@section('styles')
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
<!--breadcrumb-->
<div class="breadcrumb_section bg_gray page-title-mini">
    <!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-start">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">Admin</a></li>
                    <li class="breadcrumb-item active"><a href="{{url('/admin/produk')}}">produk</a></li>
                </ol>
            </div>
            <div class="col-md-6">
                <div class="breadcrumb justify-content-md-end">
                    <div class="btn-group">
                        <a href="{{route('produk.create')}}" class="btn btn-sm btn-primary">Add Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTAINER-->
<!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">produk</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stok</th>
                        <th>kategori</th>
                        <th>image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($produk as $data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->nama_produk}}</td>
                        <td>${{$data->price}}</td>
                        <td>{{$data->stock_quantity}}</td>
                        <td>{{$data->kategori->name}}</td>
                        <td>{{$data->image}}</td>
                        <td>
                            <form action="{{route('produk.destroy',$data->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="button"
                                    class="btn btn-sm rounded-pill btn-outline-secondary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false"> Choose
                                </button>
                                <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{route('produk.show',$data->id)}}"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Show</a>
                                    <a class="dropdown-item" href="{{route('produk.edit',$data->id)}}"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                        <a href="{{ route('produk.destroy', $data->id) }}" class="btn btn-sm btn-danger"
                                            data-confirm-delete="true">Delete</a>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script>
    $(document).ready(function() {
		$('#example').DataTable();
	});
</script>
@endpush
