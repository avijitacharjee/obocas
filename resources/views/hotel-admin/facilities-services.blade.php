@extends('hotel-admin.layout')
@section('css-imports')
    <!-- favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('/hotel-admin/assets/images/favicon.png') }}" type="image/png" />
    <link rel="stylesheet" href="{{ asset('/hotel-admin/assets/css/bootstrap-v3.min.css') }}">
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
                        <div class="page-header-component-title th__page-header">
                            <div class="row">
                                <div class="th__page-header__content col-md-12">
                                    <h1 class="th__page-header__title">
                                        Facilities &amp; services
                                    </h1>
                                </div>
                            </div>

                            <div class="row">
                                <div class="clearfix col-md-12">
                                    <p class="th__page-header__description">
                                        Listing your facilities can really help influence guests to book! Update the
                                        ones available at your property or on-site below.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="alert bui-alert bui-alert--info bui-alert--large bui-u-bleed@small" role="alert">
                            <div class="bui-alert__description">
                                <span class="bui-alert__title">What's missing:</span>
                                <ul>
                                    <li>
                                        <a href="{{ url('#container_301') }}">
                                            Swimming pool details
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('#container_3') }}">
                                            Restaurant Information
                                        </a>
                                    </li>
                                    <li>
                                        We noticed that some questions about your Top Facilities are still unanswered.
                                        Please double-check the following:
                                        <ul>
                                            <li>
                                                <a href="{{ url('#container_54') }}">
                                                    Spa and wellness centre
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#container_10') }}">
                                                    Sauna
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#container_17') }}">
                                                    Airport shuttle
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#container_63') }}">
                                                    Hot tub/Jacuzzi
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#container_15') }}">
                                                    Terrace
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#container_7') }}">
                                                    Bar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#container_148') }}">
                                                    Water park
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#container_144') }}">
                                                    Kids&#39; club
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12 main-content">
                                    <!-- Top Facilities -->
                                    <div class="facilities_section">
                                        <fieldset id="most_popular" class="facility-section--incomplete">
                                            <legend>
                                                Top Facilities
                                            </legend>

                                            <p>
                                                These are the facilities that guests look for the most! Tell them which
                                                you have by answering
                                                <strong>yes</strong> or <strong>no</strong> to each question and click
                                                <strong>save
                                                </strong>.
                                            </p>

                                            <div class="row">
                                                @foreach ($facilities as $facility)
                                                   <ul class="col-sm-6">
                                                    <li id="container_3"
                                                        class="facility_items facility_item facility_items_active">

                                                        <div class="facility_items_body clearfix">
                                                            <div class="col-sm-8">
                                                                <span class="facility-item__name">
                                                                    {{$facility->name}}
                                                                </span>

                                                            </div>
                                                            <div class="col-sm-4 facility-item__radio-buttons">
                                                                <div class="bui-inline-container">
                                                                    <label class="bui-radio">
                                                                        <input class="bui-radio__input" type="radio" onclick="return false;"
                                                                             checked />
                                                                        <span class="bui-radio__label">
                                                                            Yes
                                                                        </span>
                                                                    </label>
                                                                    <label class="bui-radio">
                                                                        <input class="bui-radio__input" type="radio" onclick="return false;"
                                                                            />
                                                                        <span class="bui-radio__label">
                                                                            No
                                                                        </span>
                                                                    </label>
                                                                    <a href="{{ url('/hotel-admin/facility/delete') }}/{{$facility->id}}"
                                                                        class="btn-default">
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                @endforeach

                                            </div>
                                        </fieldset>
                                    </div>
                                    <!-- Top Facilities -->
                                    <fieldset>
                                        <legend>Add new Facility</legend>
                                        <form action="/hotel-admin/facility/add" method="POST">
                                            @csrf
                                            <div style="display: flex; flex-direction: row;margin-bottom: 20px;">
                                                <div class="input-group" style="width: 70%">
                                                    <input name="name" type="text" class="form-control" placeholder="Write facility here">
                                                </div>
                                                <div class="col-sm-6 facility-item__radio-buttons" style="width: 30%">
                                                    <div class="bui-inline-container">
                                                        <span>Available:</span>
                                                        <label class="bui-radio">
                                                            <input class="bui-radio__input" type="radio"
                                                                value="1" name="is_available"
                                                                checked />
                                                            <span class="bui-radio__label">
                                                                Yes
                                                            </span>
                                                        </label>
                                                        <label class="bui-radio">
                                                            <input class="bui-radio__input" type="radio"
                                                                value="0" name="is_available" />
                                                            <span class="bui-radio__label">
                                                                No
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>



                                            <input type="submit" name="save" id="save" value="Add"
                                                class="btn btn-primary btn-block btn-lg btn-save-bottom">
                                        </form>
                                    </fieldset>

                            </div>
                        </div>
                    </div>
@endsection
