@extends('admin.layout')
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Images</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('index.html') }}">Dashboard</a></li>
                    {{-- <li class="breadcrumb-item"><a href="{{ url('javascript:(0);') }}">Users</a></li> --}}
                    <li class="breadcrumb-item active">Images</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatable table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($images)
                                    @foreach($images as $image)
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a class="avatar avatar-sm mr-2"><img
                                                            width="400px" height="400px"
                                                            src="{{ asset('')}}storage/{{$image->image}}"
                                                            alt="User Image"/></a>
                                                </h2>
                                            </td>
                                            <td>{{$image->type}}</td>
                                            <td><a href="/admin/images/delete/{{$image->id}}">Delete</a></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables/datatables.min.js') }}"></script>
@endsection
