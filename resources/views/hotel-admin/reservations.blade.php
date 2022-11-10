@extends('hotel-admin.layout')
@section('css-imports')
    <!-- Bootstrap v5.0.0-beta3 -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/bootstrap.min.css") }}">
	<!-- font awesome -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/all.min.css") }}">

	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/style.min.css") }}">

	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/pages/reservations.min.css") }}">
@endsection
@section('content')
<!-- Main -->
<main class="main" style="padding-bottom: 66px;">
    <div class="bui-container bui-container--center">
        <div class="bui-page-header">

            <h1 class="bui-page-header__title">
                <span>Reservations</span>
            </h1>
            <div class="bui-page-header__actions">

                <div class="header-actions--desktop">
                    <a href="{{ url("assets/file/rstatement.xls") }}" download
                        class="bui-link bui-link--secondary bui-page-header__action--button page-header__action--button">
                        <svg viewBox="0 0 24 24" focusable="false" height="16" role="presentation"
                            width="16" aria-hidden="true"
                            class="icon-gap bk-icon -material-ic_file_download">
                            <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"></path>
                        </svg>
                        Download
                    </a>
                    <a href="{{ url("") }}" onclick="window.print();"
                        class="bui-page-header__action--button page-header__action--button bui-link bui-link--secondary">
                        <svg viewBox="0 0 24 24" focusable="false" height="16" role="presentation"
                            aria-hidden="true" width="16"
                            class="icon-gap bk-icon -material-ic_print">
                            <path
                                d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z">
                            </path>
                        </svg>
                        <span>Print reservation list</span>
                    </a>
                </div>

            </div>

        </div>

        <!-- Form -->
        <form method="" class="filter-wrapper">
            <div class="filters-top-row">
                <fieldset>
                    <div class="form-align bui-group bui-group--inline">

                        <!-- Select Date-Type -->
                        <div class="bui-form__group">
                            <label for="date_type">Date of</label>
                            <div class="bui-input-select">
                                <select id="date_type" name="date_type" class="bui-form__control">
                                    <option value="booking"> Reservation </option>
                                    <option value="arrival" selected="selected">Check-in</option>
                                    <option value="departure">Check-out</option>
                                    <option value="invoiced">Invoice</option>
                                    <option value="stay"> Stay</option>
                                </select>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="bui-input-select__icon">
                                    <path
                                        d="M12 20.09a1.24 1.24 0 0 1-.88-.36L6 14.61a.75.75 0 1 1 1.06-1.06L12 18.49l4.94-4.94A.75.75 0 0 1 18 14.61l-5.12 5.12a1.24 1.24 0 0 1-.88.36zm6-9.46a.75.75 0 0 0 0-1.06l-5.12-5.11a1.24 1.24 0 0 0-1.754-.006l-.006.006L6 9.57a.75.75 0 0 0 0 1.06.74.74 0 0 0 1.06 0L12 5.7l4.94 4.93a.73.73 0 0 0 .53.22c.2 0 .39-.078.53-.22z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <!-- /Select Date-Type -->

                        <!-- Select Date -->
                        <div class="ext-datepicker__wrap">
                            <div label="From" class="ext-datepicker__text-input bui-form__group">
                                <label for="date_from">
                                    From
                                </label>
                                <input id="date_from" type="date" label="From" name="date_from"
                                    value="2022-03-19" class="bui-form__control">
                            </div>
                        </div>
                        <div class="ext-datepicker__wrap">
                            <div label="Until" name="date_to"
                                class="ext-datepicker__text-input bui-form__group">
                                <label for="date_to">
                                    Until
                                </label>
                                <input id="date_to" type="date" label="Until" name="date_to"
                                    value="2022-03-20" class="bui-form__control">

                            </div>
                        </div>
                        <!-- /Select Date -->

                        <!-- More filters Option -->
                        <button type="button" class="bui-button bui-button--secondary more-filters">
                            <span class="bui-button__text">
                                <span>More filters</span>
                                <svg focusable="false" viewBox="0 0 24 24" width="16"
                                    aria-hidden="true" role="presentation" height="16"
                                    class="button-secondary__icon bk-icon -material-ic_keyboard_arrow_down">
                                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z">
                                    </path>
                                </svg>
                            </span>
                        </button>
                        <!-- /More filters Option -->

                        <!-- Table Show Button -->
                        <button type="submit" class="bui-button bui-button--primary">
                            <span class="bui-button__text">
                                <span>Show</span>
                            </span>
                        </button>
                        <!-- /Table Show Button -->

                    </div>
                </fieldset>

            </div>

            <!-- More filters Panel -->
            <div class="filters bui-panel d-none">
                <fieldset>
                    <legend>
                        <span>More filters</span>
                    </legend>

                    <div class="filters-groups bui-group">
                        <div size="2" class="filter-group">
                            <strong class="filter-group-title">
                                <span>Reservation status</span>
                            </strong>
                            <div class="bui-group">

                                <div type="checkbox" id="filter7" name="" value=""
                                    class="bui-form__group">
                                    <label class="bui-checkbox">
                                        <input type="checkbox" id="filter7" name="" value=""
                                            class="bui-checkbox__input">
                                        <span class="bui-checkbox__label">OK</span>
                                    </label>
                                </div>

                                <div type="checkbox" id="filter8" name="" value=""
                                    class="bui-form__group">
                                    <label class="bui-checkbox">
                                        <input type="checkbox" id="filter8" name="" value=""
                                            class="bui-checkbox__input">
                                        <span class="bui-checkbox__label">
                                            Cancelled
                                        </span>
                                    </label>
                                </div>

                                <div type="checkbox" id="filter9" name="" value=""
                                    class="bui-form__group">
                                    <label class="bui-checkbox">
                                        <input type="checkbox" id="filter9" name="" value=""
                                            class="bui-checkbox__input">
                                        <span class="bui-checkbox__label">No show</span>
                                    </label>

                                </div>
                                <div type="checkbox" id="filter10" name="" value=""
                                    class="bui-form__group">
                                    <label class="bui-checkbox">
                                        <input type="checkbox" id="filter10" name="" value=""
                                            class="bui-checkbox__input">
                                        <span class="bui-checkbox__label">
                                            Corporate card
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div size="2" class="filter-group">
                            <strong class="filter-group-title">
                                <span>Guest communication</span>
                            </strong>
                            <div class="bui-group">
                                <div type="checkbox" id="filter13" name="" value="pending"
                                    class="bui-form__group">
                                    <label class="bui-checkbox"><input type="checkbox" id="filter13"
                                            name="" value="" class="bui-checkbox__input"> <span
                                            class="bui-checkbox__label">

                                            Pending guest request
                                        </span></label>

                                </div>
                                <div type="checkbox" label="Invoice required" id="filter14"
                                    name="invoice_required" value="required"
                                    class="bui-form__group"><label class="bui-checkbox"><input
                                            type="checkbox" label="Invoice required" id="filter14"
                                            name="invoice_required" value="required"
                                            class="bui-checkbox__input"> <span
                                            class="bui-checkbox__label">

                                            Invoice required
                                        </span></label>

                                </div>
                            </div>
                        </div>
                        <div size="2" class="filter-group"><strong
                                class="filter-group-title"><span>Invalid credit card</span>
                            </strong>
                            <div class="bui-group">
                                <div type="checkbox" label="Updated" id="filter17" name="" value=""
                                    class="bui-form__group">
                                    <label class="bui-checkbox">
                                        <input type="checkbox" label="Updated" id="filter17" name=""
                                            value="" class="bui-checkbox__input">
                                        <span class="bui-checkbox__label">
                                            Updated
                                        </span>
                                    </label>
                                </div>
                                <div type="checkbox" label="Pending" id="filter18" name=""
                                    value="pending" class="bui-form__group">
                                    <label class="bui-checkbox">
                                        <input type="checkbox" label="Pending" id="filter18" name=""
                                            value="pending" class="bui-checkbox__input">
                                        <span class="bui-checkbox__label">
                                            Pending
                                        </span>
                                    </label>

                                </div>
                            </div>
                        </div>

                        <div size="2" class="filter-group"><strong
                                class="filter-group-title"><span>Keywords</span>
                            </strong>
                            <div class="bui-group">
                                <div value="" placeholder="Keywords (optional)"
                                    aria-label="Keywords (optional)" name="term"
                                    class="bui-form__group"><label for="filter19"
                                        style="display:none;"></label> <input id="filter19"
                                        aria-describedby="describe-filter19" type="text"
                                        placeholder="Keywords (optional)"
                                        aria-label="Keywords (optional)" name="term" value=""
                                        class="bui-form__control">

                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <!-- /More filters Panel -->

        </form>
        <!-- /Form -->



        <!-- Data Table-->
        <div class="table-responsive">
            <table class="table align-middle">
                <!-- Table Head -->
                <thead>
                    <tr>
                        <th class="">
                            <button class="peg-column-sort">
                                <span>Guest name</span>
                                <svg width="12" viewBox="0 0 24 24" role="presentation"
                                    focusable="false" height="12" aria-hidden="true"
                                    class="peg-column-sort__icon  bk-icon -material-ic_arrow_upward">
                                    <path
                                        d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z">
                                    </path>
                                </svg>
                            </button>
                        </th>
                        <th class="">
                            <button class="peg-column-sort">
                                <span>Check-in</span>
                                <svg viewBox="0 0 24 24" width="12" role="presentation"
                                    focusable="false" aria-hidden="true" height="12"
                                    class="peg-column-sort__icon bui-u-hidden-print bk-icon -material-ic_arrow_upward">
                                    <path
                                        d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z">
                                    </path>
                                </svg>
                            </button>
                        </th>
                        <th class="">
                            <button class="peg-column-sort">
                                <span>Check-out</span>
                                <svg aria-hidden="true" height="12" role="presentation"
                                    viewBox="0 0 24 24" width="12" focusable="false"
                                    class="peg-column-sort__icon bui-u-hidden-print bk-icon -material-ic_arrow_upward"
                                    style="display:none;">
                                    <path
                                        d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z">
                                    </path>
                                </svg>
                            </button>
                        </th>
                        <th class="">
                            <button class="peg-column-sort">
                                <span>Rooms</span>
                                <svg aria-hidden="true" height="12" role="presentation"
                                    viewBox="0 0 24 24" width="12" focusable="false"
                                    class="peg-column-sort__icon bui-u-hidden-print bk-icon -material-ic_arrow_upward"
                                    style="display:none;">
                                    <path
                                        d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z">
                                    </path>
                                </svg>
                            </button>
                        </th>
                        <th class="">
                            <button class="peg-column-sort">
                                <span>Booked on</span>
                                <svg height="12" aria-hidden="true" width="12" viewBox="0 0 24 24"
                                    role="presentation" focusable="false"
                                    class="peg-column-sort__icon bui-u-hidden-print bk-icon -material-ic_arrow_upward"
                                    style="display:none;">
                                    <path
                                        d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z">
                                    </path>
                                </svg>
                            </button>
                        </th>
                        <th class="">
                            <button class="peg-column-sort">
                                <span>Status</span>
                                <svg aria-hidden="true" height="12" focusable="false" width="12"
                                    viewBox="0 0 24 24" role="presentation"
                                    class="peg-column-sort__icon bui-u-hidden-print bk-icon -material-ic_arrow_upward"
                                    style="display:none;">
                                    <path
                                        d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z">
                                    </path>
                                </svg>
                            </button>
                        </th>
                        <th class="">
                            <button class="peg-column-sort">
                                <span>Price</span>
                                <svg viewBox="0 0 24 24" width="12" role="presentation"
                                    focusable="false" height="12" aria-hidden="true"
                                    class="peg-column-sort__icon bui-u-hidden-print bk-icon -material-ic_arrow_upward"
                                    style="display:none;">
                                    <path
                                        d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z">
                                    </path>
                                </svg>
                            </button>
                        </th>
                        <th class="">
                            <button class="peg-column-sort">
                                Commission
                                <svg height="12" aria-hidden="true" focusable="false"
                                    viewBox="0 0 24 24" width="12" role="presentation"
                                    class="peg-column-sort__icon bui-u-hidden-print bk-icon -material-ic_arrow_upward"
                                    style="display:none;">
                                    <path
                                        d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z">
                                    </path>
                                </svg>
                            </button>
                        </th>
                        <th class="">
                            <button class="peg-column-sort">
                                <span>Booking number</span>
                                <svg focusable="false" viewBox="0 0 24 24" width="12"
                                    role="presentation" aria-hidden="true" height="12"
                                    class="peg-column-sort__icon bui-u-hidden-print bk-icon -material-ic_arrow_upward"
                                    style="display:none;">
                                    <path
                                        d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z">
                                    </path>
                                </svg>
                            </button>
                        </th>
                    </tr>
                </thead>
                <!-- /Table Head -->
                <!-- Table Body -->
                <tbody>
                    @foreach ($reservations as $booking)
                        <tr>
                            <td>{{$booking->firstname}}</td>
                            <td>12-02-2022</td>
                            <td>12-02-2022</td>
                            <td>5</td>
                            <td>12-02-2022</td>
                            <td>Active</td>
                            <td>BTD 2500</td>
                            <td>On</td>
                            <td>2525858</td>
                        </tr>
                    @endforeach
                </tbody>
                <!-- /Table Body -->

                <!-- Table Footer -->
                <tfoot class="">
                    <tr class="">
                        <td colspan="9" class="">
                            <div>
                                <span class="totals-spacing ">
                                    <span>
                                        Commission: US$0
                                    </span>
                                </span>
                                <div class="bui-f-font-strong bui-u-inline ">
                                    <span>Total price:</span>
                                    <div class="bui-u-inline">
                                        <svg focusable="false" viewBox="0 0 24 24" width="20"
                                            role="presentation" aria-hidden="true" height="20"
                                            class="icon_align_sub fill_grayscale bk-icon -material-ic_help">
                                            <path
                                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
                <!-- /Table Footer -->

            </table>
        </div>
        <!-- /Data Table-->

        <!-- No Result Found Table-->
        <div class="reservation-table__wrapper bui-spacer d-none">
            <div class="reservation-table--empty bui-spacer">
                <div class="bui-empty-state">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        class="bui-empty-state__icon">
                        <path
                            d="M13.629 22.5H2.25a.75.75 0 0 1-.75-.75V2.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v11.379a.75.75 0 0 1-.22.53L14.16 22.28a.75.75 0 0 1-.53.219zm0 1.5a2.25 2.25 0 0 0 1.59-.659l8.122-8.122A2.25 2.25 0 0 0 24 13.63V2.25A2.25 2.25 0 0 0 21.75 0H2.25A2.25 2.25 0 0 0 0 2.25v19.5A2.25 2.25 0 0 0 2.25 24h11.379zM15 23.115V15.75a.75.75 0 0 1 .75-.75h7.365a.75.75 0 0 0 0-1.5H15.75a2.25 2.25 0 0 0-2.25 2.25v7.365a.75.75 0 0 0 1.5 0z">
                        </path>
                    </svg>
                    <p class="bui-empty-state__text">
                        <span>
                            Oops, no results. Modify your filters and/or your date range and try
                            again.
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <!-- /No Result Found -->



        <div class="bui-pagination bui-pagination--simplified" style="display:none;">
            <div class="bui-pagination__nav">
                <ul class="bui-pagination__list">
                    <li
                        class="bui-pagination__item bui-pagination__prev-arrow bui-pagination__item--disabled">
                        <a href="{{ url("") }}" title="Back " class="bui-pagination__link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                height="20" class="bui-pagination__icon">
                                <path
                                    d="M14.55 18a.74.74 0 0 1-.53-.22l-5-5A1.08 1.08 0 0 1 8.7 12a1.1 1.1 0 0 1 .3-.78l5-5a.75.75 0 0 1 1.06 0 .74.74 0 0 1 0 1.06L10.36 12l4.72 4.72a.74.74 0 0 1 0 1.06.73.73 0 0 1-.53.22zm-4.47-5.72zm0-.57z">
                                </path>
                            </svg>
                            <span class="bui-pagination__direction">Back</span>
                        </a>
                    </li>
                    <li class="bui-pagination__current-page">
                        <span>Page 1</span>
                    </li>
                    <li
                        class="bui-pagination__item bui-pagination__next-arrow bui-pagination__item--disabled">
                        <a href="{{ url("") }}" title="Next" class="bui-pagination__link">
                            <span class="bui-pagination__direction">Next</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                height="20" class="bui-pagination__icon">
                                <path
                                    d="M9.45 6c.2 0 .39.078.53.22l5 5c.208.206.323.487.32.78a1.1 1.1 0 0 1-.32.78l-5 5a.75.75 0 0 1-1.06 0 .74.74 0 0 1 0-1.06L13.64 12 8.92 7.28a.74.74 0 0 1 0-1.06.73.73 0 0 1 .53-.22zm4.47 5.72zm0 .57z">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bui-pagination__controls">

                <div class="bui-form__group bui-pagination__select">
                    <label for="reservations_table_pagination" style="display:none;"></label>
                    <div class="bui-input-select">
                        <select id="reservations_table_pagination"
                            class="bui-form__control bui-pagination__control">
                            <option value="25"> Show 25</option>
                            <option value="50" selected="selected">Show 50</option>
                            <option value="100">Show 100</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="bui-input-select__icon">
                            <path
                                d="M12 20.09a1.24 1.24 0 0 1-.88-.36L6 14.61a.75.75 0 1 1 1.06-1.06L12 18.49l4.94-4.94A.75.75 0 0 1 18 14.61l-5.12 5.12a1.24 1.24 0 0 1-.88.36zm6-9.46a.75.75 0 0 0 0-1.06l-5.12-5.11a1.24 1.24 0 0 0-1.754-.006l-.006.006L6 9.57a.75.75 0 0 0 0 1.06.74.74 0 0 0 1.06 0L12 5.7l4.94 4.93a.73.73 0 0 0 .53.22c.2 0 .39-.078.53-.22z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>



    </div>
</main>
<!-- /Main -->
@endsection
