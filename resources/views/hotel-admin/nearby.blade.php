@extends('hotel-admin.layout')
@section('css-imports')
    <!-- favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('/hotel-admin/assets/images/favicon.png') }}" type="image/png" />
    <!-- Bootstrap v5.0.0-beta3 -->
    <link rel="stylesheet" href="{{ asset('/hotel-admin/assets/css/bootstrap.min.css') }}">
    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset('/hotel-admin/assets/css/all.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('/hotel-admin/assets/css/style.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/hotel-admin/assets/css/pages/facilities-services.min.css') }}">
@endsection
@section('content')
    <div class="bui-container bui-container--center">
        <div class="page-header-component-title th__page-header ">
            <div class="row">
                <div class="th__page-header__content col-md-12">
                    <h1 class="th__page-header__title">
                        What's nearby?
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-8 main-content">
                <form action="/hotel-admin/nearby" method="POST" role="form">
                    @csrf
                    <h3>Shopping and dining</h3>
                    <fieldset>
                        <div class="surrounding-group">
                            <h4 class="surrounding-group-header">Restaurant:</h4>
                            <div class="row surrounding-item ">

                                <div class="col-md-5">
                                    <label>Name</label>
                                    <input name="restaurant_name" value="{{$nearbyRestaurant->name}}" class="form-control surrounding-name">
                                </div>

                                <div class="col-md-5">
                                    <label>Distance</label>
                                    <div class="input-group form-group">
                                        <div>
                                            <input name="restaurant_distance" type="number" class="form-control surrounding-distance" value="{{$nearbyRestaurant->distance}}">
                                        </div>
                                        <div class="input-group-btn surrounding-unit-dropdown">
                                            <button type="button" class="btn btn-default dropdown-toggle unit-button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="dropdown-title">k.m.</span>
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{ url('#') }}" data-value="meters">metres</a></li>
                                                <li><a href="{{ url('#') }}" data-value="kilometers">kilometres</a>
                                                </li>
                                                <li><a href="{{ url('#') }}" data-value="feet">feet</a></li>
                                                <li><a href="{{ url('#') }}" data-value="miles">miles</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <span class="help-block"></span>
                                    </div><!-- /input-group -->
                                </div>

                                <div class="col-md-2 clear-delete-button-container">
                                    <a class="btn btn-default clear-button">Clear</a>
                                </div>

                            </div>

                        </div>


                        <div class="surrounding-group">
                            <h4 class="surrounding-group-header">Cafe/bar:</h4>

                            <div class="row surrounding-item ">
                                <div class="col-md-5">
                                    <label>Name</label>
                                    <input name="cafe_name" class="form-control surrounding-name" value="{{$nearbyCafe->name}}">
                                </div>
                                <div class="col-md-5">
                                    <label>Distance</label>
                                    <div class="input-group form-group">
                                        <div>
                                            <input name="cafe_distance" type="number" class="form-control surrounding-distance" value="{{$nearbyCafe->distance}}">
                                        </div>
                                        <div class="input-group-btn surrounding-unit-dropdown">
                                            <button type="button" class="btn btn-default dropdown-toggle unit-button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="dropdown-title">k.m.</span>
                                                <span class="caret"></span>
                                            </button>
                                            <input type="hidden" class="surrounding-distance-units" value="">
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{ url('#') }}" data-value="meters">metres</a></li>
                                                <li><a href="{{ url('#') }}" data-value="kilometers">kilometres</a>
                                                </li>
                                                <li><a href="{{ url('#') }}" data-value="feet">feet</a></li>
                                                <li><a href="{{ url('#') }}" data-value="miles">miles</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <span class="help-block"></span>
                                    </div><!-- /input-group -->
                                </div>

                                <div class="col-md-2 clear-delete-button-container">
                                    <a class="btn btn-default clear-button">Clear</a>
                                </div>
                            </div>

                        </div>


                        <div class="surrounding-group">
                            <h4 class="surrounding-group-header">Grocery store/supermarket:</h4>

                            <div class="row surrounding-item ">
                                <div class="col-md-5">
                                    <label>Name</label>
                                    <input name="store_name" value="{{$nearbyStore->name}}" class="form-control surrounding-name" type="text">
                                </div>
                                <div class="col-md-5">
                                    <label>Distance</label>
                                    <div class="input-group form-group">
                                        <div>
                                            <input name="store_distance" type="number" class="form-control surrounding-distance" value="{{$nearbyStore->distance}}" type="number">
                                        </div>
                                        <div class="input-group-btn surrounding-unit-dropdown">
                                            <button type="button" class="btn btn-default dropdown-toggle unit-button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="dropdown-title">k.m.</span>

                                            </button>
                                            <input type="hidden" class="surrounding-distance-units" value="">
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{ url('#') }}" data-value="meters">metres</a></li>
                                                <li><a href="{{ url('#') }}" data-value="kilometers">kilometres</a>
                                                </li>
                                                <li><a href="{{ url('#') }}" data-value="feet">feet</a></li>
                                                <li><a href="{{ url('#') }}" data-value="miles">miles</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <span class="help-block"></span>
                                    </div><!-- /input-group -->
                                </div>
                                <div class="col-md-2 clear-delete-button-container">
                                    <a class="btn btn-default clear-button">Clear</a>
                                </div>
                            </div>

                        </div>

                        <div class="surrounding-group">
                            <h4 class="surrounding-group-header">Market:</h4>

                            <div class="row surrounding-item ">
                                <div class="col-md-5">
                                    <label>Name</label>
                                    <input name="market_name" value="{{$nearbyMarket->name}}" class="form-control surrounding-name">
                                </div>
                                <div class="col-md-5">
                                    <label>Distance</label>
                                    <div class="input-group form-group">
                                        <div>
                                            <input name="market_distance" type="number" class="form-control surrounding-distance"
                                                value="{{$nearbyMarket->distance}}">
                                        </div>
                                        <div class="input-group-btn surrounding-unit-dropdown">
                                            <button type="button" class="btn btn-default dropdown-toggle unit-button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="dropdown-title">k.m.</span>
                                                <span class="caret"></span>
                                            </button>
                                            <input type="hidden" class="surrounding-distance-units" value="">
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{ url('#') }}" data-value="meters">metres</a></li>
                                                <li><a href="{{ url('#') }}" data-value="kilometers">kilometres</a>
                                                </li>
                                                <li><a href="{{ url('#') }}" data-value="feet">feet</a></li>
                                                <li><a href="{{ url('#') }}" data-value="miles">miles</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <span class="help-block"></span>
                                    </div><!-- /input-group -->
                                </div>
                                <div class="col-md-2 clear-delete-button-container">
                                    <a class="btn btn-default clear-button">Clear</a>
                                </div>
                            </div>

                        </div>

                    </fieldset>

                    <h3>Places of interest</h3>

                    <fieldset>
                        <div class="surrounding-group">
                            <h4 class="surrounding-group-header">Mountain:</h4>

                            <div class="row surrounding-item ">
                                <div class="col-md-5">
                                    <label>Name</label>
                                    <input name="mountain_name" value="{{$nearbyMountain->name}}" class="form-control surrounding-name">
                                </div>
                                <div class="col-md-5">
                                    <label>Distance</label>
                                    <div class="input-group form-group">
                                        <div>
                                            <input name="mountain_distance" type="number" class="form-control surrounding-distance"
                                                value="{{$nearbyMountain->distance}}">
                                        </div>
                                        <div class="input-group-btn surrounding-unit-dropdown">
                                            <button type="button" class="btn btn-default dropdown-toggle unit-button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="dropdown-title">k.m.</span>
                                                <span class="caret"></span>
                                            </button>
                                            <input type="hidden" class="surrounding-distance-units" value="">
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{ url('#') }}" data-value="meters">metres</a></li>
                                                <li><a href="{{ url('#') }}" data-value="kilometers">kilometres</a>
                                                </li>
                                                <li><a href="{{ url('#') }}" data-value="feet">feet</a></li>
                                                <li><a href="{{ url('#') }}" data-value="miles">miles</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <span class="help-block"></span>
                                    </div><!-- /input-group -->
                                </div>
                                <div class="col-md-2 clear-delete-button-container">
                                    <a class="btn btn-default clear-button">Clear</a>
                                </div>
                            </div>


                        </div>

                        <div class="surrounding-group">
                            <h4 class="surrounding-group-header">Lake:</h4>

                            <div class="row surrounding-item ">
                                <div class="col-md-5">
                                    <label>Name</label>
                                    <input name="lake_name" value="{{$nearbyLake->name}}" class="form-control surrounding-name">
                                </div>
                                <div class="col-md-5">
                                    <label>Distance</label>
                                    <div class="input-group form-group">
                                        <div>
                                            <input name="lake_distance" type="number" class="form-control surrounding-distance"
                                                value="{{$nearbyLake->distance}}">
                                        </div>
                                        <div class="input-group-btn surrounding-unit-dropdown">
                                            <button type="button" class="btn btn-default dropdown-toggle unit-button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="dropdown-title">k.m.</span>
                                                <span class="caret"></span>
                                            </button>
                                            <input type="hidden" class="surrounding-distance-units" value="">
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{ url('#') }}" data-value="meters">metres</a></li>
                                                <li><a href="{{ url('#') }}" data-value="kilometers">kilometres</a>
                                                </li>
                                                <li><a href="{{ url('#') }}" data-value="feet">feet</a></li>
                                                <li><a href="{{ url('#') }}" data-value="miles">miles</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <span class="help-block"></span>
                                    </div><!-- /input-group -->
                                </div>
                                <div class="col-md-2 clear-delete-button-container">
                                    <a class="btn btn-default clear-button">Clear</a>
                                </div>
                            </div>

                        </div>

                        <div class="surrounding-group">
                            <h4 class="surrounding-group-header">River:</h4>

                            <div class="row surrounding-item ">
                                <div class="col-md-5">
                                    <label>Name</label>
                                    <input name="river_name" value="{{$nearbyRiver->name}}" class="form-control surrounding-name">
                                </div>
                                <div class="col-md-5">
                                    <label>Distance</label>
                                    <div class="input-group form-group">
                                        <div>
                                            <input name="river_distance" type="number" class="form-control surrounding-distance"
                                                value="{{$nearbyRiver->distance}}">
                                        </div>
                                        <div class="input-group-btn surrounding-unit-dropdown">
                                            <button type="button" class="btn btn-default dropdown-toggle unit-button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="dropdown-title">k.m.</span>
                                                <span class="caret"></span>
                                            </button>
                                            <input type="hidden" class="surrounding-distance-units" value="">
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{ url('#') }}" data-value="meters">metres</a></li>
                                                <li><a href="{{ url('#') }}" data-value="kilometers">kilometres</a>
                                                </li>
                                                <li><a href="{{ url('#') }}" data-value="feet">feet</a></li>
                                                <li><a href="{{ url('#') }}" data-value="miles">miles</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <span class="help-block"></span>
                                    </div><!-- /input-group -->
                                </div>
                                <div class="col-md-2 clear-delete-button-container">
                                    <a class="btn btn-default clear-button">Clear</a>
                                </div>
                            </div>

                        </div>

                        <div class="surrounding-group">
                            <h4 class="surrounding-group-header">Sea/ocean:</h4>

                            <div class="row surrounding-item ">
                                <div class="col-md-5">
                                    <label>Name</label>
                                    <input name="sea_name" value="{{$nearbySea->name}}" class="form-control surrounding-name">
                                </div>
                                <div class="col-md-5">
                                    <label>Distance</label>
                                    <div class="input-group form-group">
                                        <div>
                                            <input name="sea_distance" type="number" class="form-control surrounding-distance"
                                                value="{{$nearbySea->distance}}">
                                        </div>
                                        <div class="input-group-btn surrounding-unit-dropdown">
                                            <button type="button" class="btn btn-default dropdown-toggle unit-button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="dropdown-title">k.m.</span>
                                                <span class="caret"></span>
                                            </button>
                                            <input type="hidden" class="surrounding-distance-units" value="">
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{ url('#') }}" data-value="meters">metres</a></li>
                                                <li><a href="{{ url('#') }}" data-value="kilometers">kilometres</a>
                                                </li>
                                                <li><a href="{{ url('#') }}" data-value="feet">feet</a></li>
                                                <li><a href="{{ url('#') }}" data-value="miles">miles</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <span class="help-block"></span>
                                    </div><!-- /input-group -->
                                </div>
                                <div class="col-md-2 clear-delete-button-container">
                                    <a class="btn btn-default clear-button">Clear</a>
                                </div>
                            </div>

                        </div>


                        <div class="surrounding-group">
                            <h4 class="surrounding-group-header">Beach:</h4>

                            <div class="row surrounding-item ">
                                <div class="col-md-5">
                                    <label>Name</label>
                                    <input name="beach_name" value="{{$nearbyBeach->name}}" class="form-control surrounding-name">
                                </div>
                                <div class="col-md-5">
                                    <label>Distance</label>
                                    <div class="input-group form-group">
                                        <div>
                                            <input name="beach_distance" type="number" class="form-control surrounding-distance"
                                                value="{{$nearbyBeach->distance}}">
                                        </div>
                                        <div class="input-group-btn surrounding-unit-dropdown">
                                            <button type="button" class="btn btn-default dropdown-toggle unit-button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="dropdown-title">k.m.</span>
                                                <span class="caret"></span>
                                            </button>
                                            <input type="hidden" class="surrounding-distance-units" value="">
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{ url('#') }}" data-value="meters">metres</a></li>
                                                <li><a href="{{ url('#') }}" data-value="kilometers">kilometres</a>
                                                </li>
                                                <li><a href="{{ url('#') }}" data-value="feet">feet</a></li>
                                                <li><a href="{{ url('#') }}" data-value="miles">miles</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <span class="help-block"></span>
                                    </div><!-- /input-group -->
                                </div>
                                <div class="col-md-2 clear-delete-button-container">
                                    <a class="btn btn-default clear-button">Clear</a>
                                </div>
                            </div>

                        </div>


                    </fieldset>

                    <div class="row">
                        <div class="col text-center">
                            <input type="submit" name="save" value="Save"
                                class="btn btn-primary btn-block btn-lg btn-save-bottom">
                        </div>
                    </div>

                </form>
            </div>

            <div class="col-md-4">
                <h3>Tell us what's nearby</h3>
                <p>Location is one of the factors that guests find most important when choosing where to
                    stay - they want to know if they will have somewhere to eat out or buy food nearby.
                </p>
                <p>What are your top 3 recommendations for restaurants, cafés and bars, markets and
                    grocery shops?</p>
            </div>

        </div>
    </div>
@endsection
