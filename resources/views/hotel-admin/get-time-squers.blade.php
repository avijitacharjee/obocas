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

    <link rel="stylesheet" href="{{ asset('/hotel-admin/assets/css/pages/get-time-squers.min.css.css') }}">
@endsection

@section('content')
    <div class="bui-container bui-container--center">
        <div id="main-container" class="container-fluid tfa_phone_alt container-fluid--color">
            <main id="content" class="">
                <div class="page-body ">
                    <div class="transport-form tf-state-no-journeys tf-state-edit tf-state-airport-only tf-state-edit-type">
                        <div class="page-header-component-title th__page-header ">
                            <div class="row">
                                <div class="th__page-header__content col-md-12">
                                    <h1 class="th__page-header__title">
                                        How to get to time squers
                                    </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="clearfix col-md-12">
                                    <p class="th__page-header__description">
                                        Tell your guests how to get to your property.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="journeys_wrap clearfix">
                                    <div class="no_journeys">You haven't added any journeys yet.</div>
                                    <div class="tf-journeys"></div>
                                    <a href="{{ url('#') }}"
                                        class="btn btn-primary trans-add-journey tf-add-journey btn-text-wrap">Add
                                        directions to your property</a>
                                </div>
                                <div class="journey_form_wrap tf-edit">
                                    <div class="clearfix trans-options--controls">
                                        <div class="trans-options-title pull-left">
                                            Select starting point of guest
                                        </div>
                                        <a href="{{ url('#') }}"
                                            class="form-cancel-minor pull-right tf-cancel-type">Close</a>
                                    </div>
                                    <div class="starting tf-set-type active">
                                        <span class="start-icon">
                                            <i class="fa-solid fa-plane-arrival"></i></span>Airport
                                    </div>
                                    <div class="starting tf-set-type tf-hide-if_airport-only">
                                        <span class="start-icon">네</span>Train station
                                    </div>
                                    <div class="starting tf-set-type tf-hide-if_airport-only">
                                        <span class="start-icon">덄</span>Other starting point
                                    </div>
                                    <div class="journey_form tf-content">
                                        <div class="start_point"></div>
                                        <form action="/hotel-admin/how-to-get" method="post">
                                            @csrf
                                            <div
                                                class="leg tf-start-leg tf-tab tf-tab_id-airport tf-tab_active leg-state-tt-shuttle_public leg-state-ttset-any">
                                                <div class="row">
                                                    <div class="col-md-4 form-label">Airport name</div>
                                                    <div class="col-md-7 form-field">
                                                        <input type="text" class="form-control" name="airport_name" value="{{$propertyPath->airport_name}}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 form-label">Transport type</div>
                                                    <div class="col-md-7 form-field">
                                                        <input type="text" class="form-control" name="transport_type" value="{{$propertyPath->transport_type}}">
                                                    </div>
                                                </div>
                                                {{-- <div class="row tf-hide tf-show-if_bus tf-show-if_metro tf-show-if_tram">
                                                <div class="col-md-4 form-label">Line</div>
                                                <div class="col-md-7 form-field">
                                                    <input type="text" class="form-control" name="line"
                                                        maxlength="30">
                                                </div>
                                            </div>
                                            <div class="row tf-hide tf-show-if_car">
                                                <div class="col-md-4 form-label">Motorway</div>
                                                <div class="col-md-3 form-field">
                                                    <input type="text" class="form-control" name="motorway"
                                                        maxlength="30">
                                                </div>
                                            </div>
                                            <div class="row tf-hide tf-show-if_car">
                                                <div class="col-md-4 form-label">Junction</div>
                                                <div class="col-md-3 form-field">
                                                    <input type="text" class="form-control" name="junction"
                                                        maxlength="30">
                                                </div>
                                            </div> --}}
                                                <div class="tf-hide tf-show-if_tt-set-any">
                                                    <div class="tf-field-set">
                                                        <div class="row tf-form-row">
                                                            <div class="col-md-4 form-label">To</div>
                                                            <div class="col-md-7 form-field tfac--wrap">
                                                                <input type="text" value="{{$propertyPath->to}}"
                                                                    class="form-control from-to-location tf-free-text select-and-free-text tfac tfac--id-1"
                                                                    name="to" data-validation="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="tf-hide-if_car tf-hide-if_walk tf-hide-if_taxi tf-hide-if_other">
                                                        <div class="row tf-form-row">
                                                            <div class="col-md-4 form-label">Departs every
                                                            </div>
                                                            <div class="col-md-3 form-field">
                                                                <input type="text" class="form-control" value="{{$propertyPath->departs_every}}"
                                                                    name="departs_every">
                                                            </div>
                                                            <div class="col-md-5 form-label">minutes</div>
                                                        </div>
                                                        <div class="row tf-hide tf-show-if_shuttle_property">
                                                            <label class="col-md-8 col-md-offset-4 trans-checkbox-label">
                                                                <input type="checkbox" name="available_upon_arrangement"
                                                                    value="1">&nbsp;Available upon
                                                                arrangement
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="leg tf-start-leg tf-tab tf-tab_id-train">
                                            <div class="tf-field-set">
                                                <div class="row tf-form-row">
                                                    <div class="col-md-4 form-label">Train station</div>
                                                    <div class="col-md-7 form-field tfac--wrap">
                                                        <input type="text"
                                                            class="form-control from-to-location tf-free-text select-and-free-text tfac tfac--id-2"
                                                            name="from" data-validation="required"
                                                            data-autocomplete="landmark" data-autocomplete-field="from"
                                                            maxlength="255" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div
                                                    class="row tf-form-row tf-hide tf-show-if_free-text tf-form-row--distant">
                                                    <div class="col-md-4 form-label">&nbsp;</div>
                                                    <div class="col-md-7 form-field">
                                                        <input type="text" class="form-control tf-free-text"
                                                            maxlength="255">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 form-label">Transport type</div>
                                                <div class="col-md-7 form-field">
                                                    <select name="transport_type" class="form-control">
                                                        <option data-option-placeholder="" value="">
                                                            Select
                                                        </option>
                                                        <option value="1">Airport shuttle (arranged by
                                                            property)</option>
                                                        <option value="2">Airport shuttle (public)
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row tf-hide tf-show-if_bus tf-show-if_metro tf-show-if_tram">
                                                <div class="col-md-4 form-label">Line</div>
                                                <div class="col-md-7 form-field">
                                                    <input type="text" class="form-control" name="line"
                                                        maxlength="30">
                                                </div>
                                            </div>
                                            <div class="row tf-hide tf-show-if_car">
                                                <div class="col-md-4 form-label">Motorway</div>
                                                <div class="col-md-3 form-field">
                                                    <input type="text" class="form-control" name="motorway"
                                                        maxlength="30">
                                                </div>
                                            </div>
                                            <div class="row tf-hide tf-show-if_car">
                                                <div class="col-md-4 form-label">Junction</div>
                                                <div class="col-md-3 form-field">
                                                    <input type="text" class="form-control" name="junction"
                                                        maxlength="30">
                                                </div>
                                            </div>
                                            <div class="tf-hide tf-show-if_tt-set-any">

                                                <div class="tf-field-set">
                                                    <div class="row tf-form-row">
                                                        <div class="col-md-4 form-label">To</div>
                                                        <div class="col-md-7 form-field tfac--wrap">
                                                            <input type="text"
                                                                class="form-control from-to-location tf-free-text select-and-free-text tfac tfac--id-3"
                                                                name="to" data-validation="required"
                                                                data-autocomplete="landmark"
                                                                data-autocomplete-incl-property="1"
                                                                data-autocomplete-field="to" maxlength="255"
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="tf-hide-if_car tf-hide-if_walk tf-hide-if_taxi tf-hide-if_other">
                                                    <div class="row tf-form-row">
                                                        <div class="col-md-4 form-label">Departs every
                                                        </div>
                                                        <div class="col-md-3 form-field">
                                                            <input type="text" class="form-control"
                                                                name="departs_every"
                                                                data-disable-if="available_upon_arrangement"
                                                                data-validation="number" autocomplete="off"
                                                                maxlength="255">
                                                        </div>
                                                        <div class="col-md-5 form-label">minutes</div>
                                                    </div>
                                                    <div class="row tf-hide tf-show-if_shuttle_property">
                                                        <label class="col-md-8 col-md-offset-4 trans-checkbox-label">
                                                            <input type="checkbox"
                                                                name="available_upon_arrangement">&nbsp;Available
                                                            upon arrangement
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="leg tf-start-leg tf-tab tf-tab_id-other">
                                            <div class="tf-field-set">
                                                <div class="row tf-form-row">
                                                    <div class="col-md-4 form-label">From:</div>
                                                    <div class="col-md-7 form-field tfac--wrap">
                                                        <input type="text"
                                                            class="form-control from-to-location tf-free-text select-and-free-text tfac tfac--id-4"
                                                            name="from" data-validation="required"
                                                            data-autocomplete="all" data-autocomplete-field="from"
                                                            maxlength="255" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 form-label">Transport type</div>
                                                <div class="col-md-7 form-field">
                                                    <select name="transport_type" class="form-control"
                                                        data-collection="transport_type" data-validation="required"
                                                        data-placeholder="Select">
                                                        <option data-option-placeholder="" value="">
                                                            Select
                                                        </option>
                                                        <option value="1">Airport shuttle (arranged by
                                                            property)</option>
                                                        <option value="2">Airport shuttle (public)
                                                        </option>
                                                        <option value="3">Bus</option>
                                                        <option value="4">Car</option>
                                                        <option value="5">Metro</option>
                                                        <option value="6">Taxi</option>
                                                        <option value="7">Train</option>
                                                        <option value="8">Tram</option>
                                                        <option value="10">Ferry</option>
                                                        <option value="9">Walking</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row tf-hide tf-show-if_bus tf-show-if_metro tf-show-if_tram">
                                                <div class="col-md-4 form-label">Line</div>
                                                <div class="col-md-7 form-field">
                                                    <input type="text" class="form-control" name="line"
                                                        maxlength="30">
                                                </div>
                                            </div>
                                            <div class="row tf-hide tf-show-if_car">
                                                <div class="col-md-4 form-label">Motorway</div>
                                                <div class="col-md-3 form-field">
                                                    <input type="text" class="form-control" name="motorway"
                                                        maxlength="30">
                                                </div>
                                            </div>
                                            <div class="row tf-hide tf-show-if_car">
                                                <div class="col-md-4 form-label">Junction</div>
                                                <div class="col-md-3 form-field">
                                                    <input type="text" class="form-control" name="junction"
                                                        maxlength="30">
                                                </div>
                                            </div>
                                            <div class="tf-hide tf-show-if_tt-set-any">

                                                <div class="tf-field-set">
                                                    <div class="row tf-form-row">
                                                        <div class="col-md-4 form-label">To</div>
                                                        <div class="col-md-7 form-field tfac--wrap">
                                                            <input type="text"
                                                                class="form-control from-to-location tf-free-text select-and-free-text tfac tfac--id-5"
                                                                name="to" data-validation="required"
                                                                data-autocomplete="all"
                                                                data-autocomplete-incl-property="1"
                                                                data-autocomplete-field="to" maxlength="255"
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="tf-hide-if_car tf-hide-if_walk tf-hide-if_taxi tf-hide-if_other">
                                                    <div class="row tf-form-row">
                                                        <div class="col-md-4 form-label">Departs every
                                                        </div>
                                                        <div class="col-md-3 form-field">
                                                            <input type="text" class="form-control"
                                                                name="departs_every"
                                                                data-disable-if="available_upon_arrangement"
                                                                data-validation="number" autocomplete="off"
                                                                maxlength="255">
                                                        </div>
                                                        <div class="col-md-5 form-label">minutes</div>
                                                    </div>
                                                    <div class="row tf-hide tf-show-if_shuttle_property">
                                                        <label class="col-md-8 col-md-offset-4 trans-checkbox-label">
                                                            <input type="checkbox"
                                                                name="available_upon_arrangement">&nbsp;Available
                                                            upon arrangement
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tf-extra-legs"></div>

                                        <div class="separator">
                                            <div class="end_point"></div>
                                        </div> --}}
                                            <a href="{{ url('#') }}" class="extra_leg tf-add-leg"><span
                                                    class="glyphicon glyphicon-plus-sign"></span> Add extra
                                                step
                                                to journey</a>
                                            <div class="extra_details tf-common">
                                                <div class="extras">
                                                    <div class="tf-extra tf-extra_expanded">
                                                        <div class="row extra_options">
                                                            <div class="col-md-4 form-label">Journey time
                                                                (approx.)</div>
                                                            <div class="col-md-4 col-xs-6 form-field">
                                                                <input type="text" class="form-control" name="duration"
                                                                    data-validation="number" autocomplete="off" value="{{$propertyPath->journey_time}}"
                                                                    maxlength="255">
                                                            </div>
                                                            <div class="col-md-4 col-xs-6 form-label">
                                                                minutes
                                                            </div>
                                                        </div>
                                                        <div class="row extra_options">
                                                            <div class="col-md-4 form-label">Estimated price
                                                            </div>
                                                            <div class="col-md-4 col-xs-6 form-field">
                                                                <input type="text" class="form-control" name="fare" value="{{$propertyPath->fare}}"
                                                                    data-validation="number" autocomplete="off"
                                                                    maxlength="255">
                                                            </div>
                                                            <div class="col-md-4 col-xs-6 form-label"
                                                                data-var="currency_code">BDT</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if (session('message'))
                                                    <ul>
                                                        <li style="color: green">Successfully Saved</li>
                                                    </ul>
                                                @endif
                                                <a href="{{ url('#') }}"
                                                    class="form-cancel pull-right tf-cancel-type">Cancel</a>
                                                <input type="submit" class="btn btn-primary tf-submit" value="Save">

                                                <span class="trans-spinner"></span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="usage_hint">
                                    <div class="usage_title">How will this information be used?</div>
                                    <div class="usage_txt">The info you provide will be shown to your
                                        guests
                                        to ensure they are able to reach your property from various
                                        starting
                                        points. Transport information is very important to many users,
                                        and
                                        this may encourage them to book with your property instead of an
                                        alternative option!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Footer -->
@endsection
