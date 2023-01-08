@extends('admin.layout')
@php
$addImage = true;
@endphp
@section('content')
    <div class="content container-fluid">



        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Add Images</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Image</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Add details -->
                        <div class="row">
                            <div class="col-12 blog-details">
                                <form action="/admin/images/add" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select name="type" class="select select2-hidden-accessible form-control"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="index">Index page</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Images</label>
                                        <div>
                                            <input name="image" class="form-control" type="file">
                                            <small class="form-text text-muted">Max. file size: 5 MB. Allowed
                                                images: jpg, gif, png. Maximum 10 images only.</small>
                                        </div>
                                    </div>
                                    @if(Session::has('msg'))
                                    <div>
                                        <ul>
                                            <li style="color: green;">
                                                Successfully uploaded
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="m-t-20 text-center">
                                        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Add details -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('admin/assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables/datatables.min.js') }}"></script>
@endsection
