@extends('admin.layout')
@php
$dashboard = true;
@endphp
@section('content')
    <div class="row">

        <div class="col-lg-12 col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <h3 class="page-title">Dashboard</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-primary bg-primary-light">
                                    <i class="fas fa-user"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{$userCount}}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Users</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-success bg-success-light">
                                    <i class="fas fa-credit-card"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{$propertyCount}}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Appartments</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-warning bg-warning-light">
                                    <i class="fas fa-star"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{$bookingCount}}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Bookings</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-warning bg-warning-light">
                                    <i class="fas fa-star"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{$partnerCount}}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Partners</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12">
                    <h3 class="page-title">Quick Access</h3>
                </div>
            </div>

            <div class="row">

                <a href="/admin/hotels" class="col-xl-2 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header justify-content-center">
                                <span class="dash-widget-icon text-primary bg-primary-light">
                                    <i class="fas fa-star"></i>
                                </span>
                            </div>
                            <div class="dash-widget-info text-center">
                                <h6 class="text-muted">Hotels</h6>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="/admin/bookings" class="col-xl-2 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header justify-content-center">
                                <span class="dash-widget-icon text-primary bg-primary-light">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <div class="dash-widget-info text-center">
                                <h6 class="text-muted">Bookings</h6>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- <div class="col-xl-2 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header justify-content-center">
                                <span class="dash-widget-icon text-primary bg-primary-light">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <div class="dash-widget-info text-center">
                                <h6 class="text-muted">Members</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header justify-content-center">
                                <span class="dash-widget-icon text-primary bg-primary-light">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <div class="dash-widget-info text-center">
                                <h6 class="text-muted">Members</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header justify-content-center">
                                <span class="dash-widget-icon text-primary bg-primary-light">
                                    <i class="fas fa-star"></i>
                                </span>
                            </div>
                            <div class="dash-widget-info text-center">
                                <h6 class="text-muted">Members</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header justify-content-center">
                                <span class="dash-widget-icon text-primary bg-primary-light">
                                    <i class="fas fa-credit-card"></i>
                                </span>
                            </div>
                            <div class="dash-widget-info text-center">
                                <h6 class="text-muted">Members</h6>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>

        </div>
    </div>


    {{-- <div class="row">

        <div class="col-md-7 d-flex">

            <!-- Recent Orders -->
            <div class="card card-table flex-fill">

                <div class="card-body">
                    <div class="" id="revenue">

                    </div>
                </div>
            </div>
            <!-- /Recent Orders -->

        </div>

        <div class="col-md-5 d-flex">

            <!-- Feed Activity -->
            <div class="card  card-table flex-fill">
                <div class="card-header pt-0">
                    <h4 class="card-title">Hotels List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="chart_right"></div>
                    </div>
                </div>
            </div>
            <!-- /Feed Activity -->

        </div>

    </div> --}}



    {{-- <div class="row">
        <div class="col-md-12">

            <!-- Recent Orders -->
            <div class="card card-table">
                <div class="card-header">
                    <h4 class="card-title">Hotel List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatable table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Hotel Name</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Property Type</th>
                                    <th>Pets allowed</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($properties as $property)
                                    <tr>
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

                                            {{$property->pets_allowed?'Yes':'No'}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Recent Orders -->

        </div>
    </div> --}}
@endsection
