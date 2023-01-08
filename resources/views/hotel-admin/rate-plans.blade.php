@extends('hotel-admin.layout')
@section('css-imports')
    <!-- favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('/hotel-admin/assets/images/favicon.png') }}" type="image/png" />

    <!-- Bootstrap v5.0.0-beta3 -->
    <link rel="stylesheet" href="{{ asset('/hotel-admin/assets/css/bootstrap.min.css') }}">
    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset('/hotel-admin/assets/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/hotel-admin/assets/css/style.min.css') }}">
@endsection
@section('content')
    <!-- Main Content -->
    <main class="main">
        <div class="bui-container bui-container--center">
            <div class="bui-page-header av-bulk-pages__page-header">

                <h1 class="bui-page-header__title">
                    <span>Open/close rooms</span>
                </h1>

            </div>
            <form action="/hotel-admin/rate-plans" method="POST">
                @csrf
                <div class="bui-panel-group">
                    <div class="bui-panel">
                        <div class="bui-spacer">
                            <h3 class="av-bulk-pages__section-title">
                                <span>Select room: </span>
                            </h3>
                        </div>
                        <div class="bui-group bui-group--inline bui-group--large">
                            <select name="room_id" id="" class="bui-form__control">
                                <option value="0">--Select Room--</option>
                                @foreach ($rooms as $room)
                                    <option value="{{ $room->id }}">{{ $room->room_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="bui-spacer">
                    <div class="bui-grid">
                        <div class="bui-grid__column-9">

                            <!-- Date & Day Select Panel -->
                            <div class="bui-panel">
                                <h3 class="av-bulk-pages__section-title">
                                    <span>Which dates do you want to make changes to?</span>
                                </h3>

                                <!-- Date Select -->
                                <div class="bui-grid">
                                    <div class="bui-grid__column-full">
                                        <div class="bui-grid">
                                            <div class="bui-grid__column-half">
                                                <div class="bui-spacer--medium">
                                                    <div class="ext-datepicker__wrap">
                                                        <div class="ext-datepicker__text-input bui-form__group">
                                                            <label for="date-from">
                                                                <span>From date:</span>
                                                            </label>
                                                            <input id="date-from" type="date" name="date_from"
                                                                class="bui-form__control">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bui-spacer--large"></div>
                                            </div>

                                            <div class="bui-grid__column-half">
                                                <div class="bui-spacer--medium">
                                                    <div class="ext-datepicker__wrap">
                                                        <div class="ext-datepicker__text-input bui-form__group">
                                                            <label for="date-until">
                                                                <span>To date:</span>
                                                            </label>
                                                            <input id="date-until" type="date" name="date_until"
                                                                class="bui-form__control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Date Select -->

                                <!-- Select Day -->
                                <div class="bui-grid">
                                    <div class="av-ocr__weekdays bui-grid__column-full">
                                        <div role="group" class="bui-group bui-group--inline bui-group--large">
                                            <div class="bui-form__group">

                                                <label class="bui-checkbox">
                                                    <input autocomplete="off" type="checkbox" name="days[]" value="0"
                                                        checked="checked" class="bui-checkbox__input">
                                                    <span class="bui-checkbox__label">
                                                        <span>Mon</span>
                                                    </span>
                                                </label>

                                            </div>
                                            <div class="bui-form__group">
                                                <label class="bui-checkbox">
                                                    <input autocomplete="off" type="checkbox" name="days[]" value="1"
                                                        checked="checked" class="bui-checkbox__input">
                                                    <span class="bui-checkbox__label">
                                                        <span>Tue</span>
                                                    </span>
                                                </label>

                                            </div>
                                            <div class="bui-form__group">
                                                <label class="bui-checkbox">
                                                    <input autocomplete="off" type="checkbox" name="days[]" value="2"
                                                        checked="checked" class="bui-checkbox__input">
                                                    <span class="bui-checkbox__label">
                                                        <span>Wed</span>
                                                    </span>
                                                </label>

                                            </div>
                                            <div class="bui-form__group">
                                                <label class="bui-checkbox">
                                                    <input autocomplete="off" type="checkbox" name="days[]" value="3"
                                                        checked="checked" class="bui-checkbox__input">
                                                    <span class="bui-checkbox__label">
                                                        <span>Thu</span>
                                                    </span>
                                                </label>

                                            </div>
                                            <div class="bui-form__group">
                                                <label class="bui-checkbox">
                                                    <input autocomplete="off" type="checkbox" name="days[]" value="4"
                                                        checked="checked" class="bui-checkbox__input">
                                                    <span class="bui-checkbox__label">
                                                        <span>Fri</span>
                                                    </span>
                                                </label>

                                            </div>
                                            <div class="bui-form__group">
                                                <label class="bui-checkbox">
                                                    <input autocomplete="off" type="checkbox" name="days[]"
                                                        value="5" checked="checked" class="bui-checkbox__input">
                                                    <span class="bui-checkbox__label">
                                                        <span>Sat</span>
                                                    </span>
                                                </label>

                                            </div>
                                            <div class="bui-form__group">
                                                <label class="bui-checkbox">
                                                    <input autocomplete="off" type="checkbox" name="days[]"
                                                        value="6" checked="checked" class="bui-checkbox__input">
                                                    <span class="bui-checkbox__label">
                                                        <span>Sun</span>
                                                    </span>
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Select Day -->

                            </div>
                            <!-- /Date & Day Select Panel -->

                            <!-- Rooms Select Panel -->
                            {{-- <div class="bui-panel-group">
                                            <div class="av-ocr-rates-panel bui-panel">
                                                <h3 class="av-bulk-pages__section-title">
                                                    <span>Which room types and rate plans do you want to open or
                                                        close?</span>
                                                </h3>
                                            </div>
                                            <div class="bui-panel">
                                                <div class="bui-spacer--large">
                                                    <p>
                                                        Deluxe Double Room
                                                    </p>
                                                </div>
                                                <div class="bui-spacer">
                                                    <div class="bui-group bui-group--inline bui-group--large">
                                                        <div id="" class="bui-form__group">
                                                            <label class="bui-checkbox">
                                                                <input autocomplete="off" type="checkbox" id="" name=""
                                                                    class="bui-checkbox__input">
                                                                <span class="bui-checkbox__label">
                                                                    <span>Entire room</span>
                                                                </span>
                                                            </label>

                                                        </div>
                                                        <div id="" class="bui-form__group">
                                                            <label class="bui-checkbox rate-button">
                                                                <input autocomplete="off" type="checkbox"
                                                                    id="rate-button" name=""
                                                                    class="bui-checkbox__input">
                                                                <span class="bui-checkbox__label">
                                                                    <span>Specific rate plans</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Rate Type -->
                                                <div class="rate-type d-none">
                                                    <div class="bui-spacer--larger">
                                                        <strong>
                                                            <span>Which rate plans do you want to apply the changes
                                                                to?</span>
                                                        </strong>
                                                    </div>
                                                    <div class="av-ocr-rates d-flex justify-content-between">
                                                        <div class="av-ocr-rates__item bui-form__group">
                                                            <label class="bui-checkbox">
                                                                <input autocomplete="off" type="checkbox"
                                                                    class="bui-checkbox__input">
                                                                <span class="bui-checkbox__label">
                                                                    Standard Rate
                                                                </span>
                                                            </label>
                                                            <!---->
                                                        </div>
                                                        <div class="av-ocr-rates__item bui-form__group">
                                                            <label class="bui-checkbox">
                                                                <input autocomplete="off" type="checkbox"
                                                                    class="bui-checkbox__input">
                                                                <span class="bui-checkbox__label">
                                                                    Non-refundable Rate
                                                                </span>
                                                            </label>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Rate Type -->

                                            </div>

                                        </div> --}}
                            <!-- /Rooms Select Panel -->

                            <!-- /Open & Close Select Panel -->
                            <div class="bui-panel-group">
                                <div class="bui-panel">
                                    <div class="bui-spacer">
                                        <h3 class="av-bulk-pages__section-title">
                                            <span>Set special rates for the selected dates: </span>
                                        </h3>
                                    </div>
                                    <div class="bui-group bui-group--inline bui-group--large">
                                        <input type="number" class="form-control" placeholder="Special rate">
                                    </div>
                                </div>
                            </div>
                            <!-- /Open & Close Select Panel -->
                            @if(session('message'))
                                <ul>
                                    <li style="color: green">{{session('message')}}</li>
                                </ul>
                            @endif
                            <!-- Submit Button -->
                            <div>
                                <button type="submit" style="float: right" class="bui-button bui-button--primary">
                                    <span class="bui-button__text">
                                        <span>Save changes</span>
                                    </span>
                                </button>
                            </div>
                            <!-- /Submit Button -->

                        </div>
                    </div>
                </div>
            </form>

        </div>
    </main>
    <!-- /Main Content -->
@endsection
