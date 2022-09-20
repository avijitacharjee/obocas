@extends('admin.layout')
@php
$hotel = true;
@endphp
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">List of Hotels</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('index.html') }}">Dashboard</a></li>
                    {{-- <li class="breadcrumb-item"><a href="{{ url('javascript:(0);') }}">Users</a></li> --}}
                    <li class="breadcrumb-item active">Hotels</li>
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
                                    <th>Hotel Name</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Property Type</th>
                                    <th class="text-center">Pets allowed</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($properties as $property)
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{ url('profile.html') }}" class="avatar avatar-sm mr-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="{{ asset('/admin/assets/img/profiles/avatar-08.jpg') }}"
                                                        alt="User Image"></a>
                                                <a href="{{ url('profile.html') }}">{{$property->property_name}}</a>
                                            </h2>
                                        </td>
                                        <td>{{$property->city}}</td>

                                        <td>{{$property->address}}</td>

                                        <td>{{$property->property_type}}</td>

                                        <td>
                                            <div class="status-toggle d-flex justify-content-center">
                                                <input type="checkbox" id="status_1" class="check" checked>
                                                <label for="status_1" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                    @endforeach
                                </tr>
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
