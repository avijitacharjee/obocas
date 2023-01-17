@extends('public.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/search-page.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/hotel.min.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="row">

            <!-- Left Side -->
            <div class="col-lg-2 mt-5"></div>
            {{-- <div class="col-lg-3 mt-5">

                <!-- Search Box -->
                <div class="sb-searchbox__outer sb-searchbox-universal">
                    <form id="frm" class="sb-searchbox
                                sb-face-lift
                                sb-searchbox--painted
                                -small
                                js--sb-searchbox">
                        <div class="sb-searchbox__row u-clearfix -title">
                            <h2 class="-searchbox__title">
                                <span class="sb-searchbox__title-text">
                                    Search
                                </span>
                            </h2>
                        </div>

                        <div class="sb-searchbox__row u-clearfix ">

                            <label class="sb-searchbox__label -main" for="ss">
                                Destination/property name:
                            </label>
                            <div>
                                <div class="c-autocomplete sb-destination
                                        -with-icon
                                        region_second_line">
                                    <svg class="bk-icon -streamline-magnifying_glass sb-destination__icon"
                                        fill="#333333" focusable="false" height="20" width="20" viewBox="0 0 24 24">
                                        <path
                                            d="M17.464 6.56a8.313 8.313 0 1 1-15.302 6.504A8.313 8.313 0 0 1 17.464 6.56zm1.38-.586C16.724.986 10.963-1.339 5.974.781.988 2.9-1.337 8.662.783 13.65c2.12 4.987 7.881 7.312 12.87 5.192 4.987-2.12 7.312-7.881 5.192-12.87zM15.691 16.75l7.029 7.03a.75.75 0 0 0 1.06-1.06l-7.029-7.03a.75.75 0 0 0-1.06 1.06z">
                                        </path>
                                    </svg>

                                    <input type="search"
                                        class="c-autocomplete__input sb-searchbox__input sb-destination__input"
                                        placeholder="Dhaka" value="">


                                </div>
                            </div>
                        </div>


                        <div class="sb-searchbox__row u-clearfix">
                            <div class="sb-dates  -compact  xp__dates">
                                <!-- Check-in & Check-out date -->
                                <div class="sb-dates__grid u-clearfix">
                                    <!-- Check-in date  -->
                                    <div class="sb-dates__col --checkin-field xp__date-time">
                                        <label for="checkin_monthday" class="sb-searchbox__label">
                                            Check-in date
                                        </label>
                                        <div class="sb-date-field__wrapper">
                                            <div class="sb-date-field b-datepicker"
                                                data-component="search/dates/date-field-select" data-sb-id="main"
                                                data-mode="checkin" data-calendar2-type="checkin"
                                                data-calendar2-title="Check-in">
                                                <div class="sb-searchbox__input sb-date-field__field sb-date__field-svg_icon"
                                                    data-field="">
                                                    <span
                                                        class="sb-date-field__icon sb-date-field__icon-btn bk-svg-wrapper calendar-restructure-sb">
                                                        <svg class="bk-icon -streamline-calendar sb-date-picker_icon-svg"
                                                            fill="#BDBDBD" focusable="false" height="20" width="20"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M22.502 13.5v8.25a.75.75 0 0 1-.75.75h-19.5a.75.75 0 0 1-.75-.75V5.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v8.25zm1.5 0V5.25A2.25 2.25 0 0 0 21.752 3h-19.5a2.25 2.25 0 0 0-2.25 2.25v16.5A2.25 2.25 0 0 0 2.252 24h19.5a2.25 2.25 0 0 0 2.25-2.25V13.5zm-23.25-3h22.5a.75.75 0 0 0 0-1.5H.752a.75.75 0 0 0 0 1.5zM7.502 6V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0zm10.5 0V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0z">
                                                            </path>
                                                        </svg>
                                                        <i class="sb-date-field__icon-text sb-date-field__icon-text-wide"
                                                            data-icon-day="" data-placeholder="+">5</i>
                                                    </span>
                                                    <div class="sb-date-field__controls sb-date-field__controls__ie-fix"
                                                        data-controls="" data-calendar2-cant-touch-this="">
                                                        <div class="sb-date-field__select -month-year js-date-field__part"
                                                            data-type="month-year">
                                                            <div class="sb-date-field__select-value">
                                                                <!-- <span class="js-date-field__value" data-placeholder="Check-in month">April 2022</span> -->
                                                                <i
                                                                    class="sb-date-field__select-icon bicon-downchevron"></i>
                                                            </div>
                                                            <select
                                                                class="sb-date-field__select-field js-date-field__select"
                                                                aria-label="Check-in month" data-no-old-calendar="1">
                                                                <option value="" selected=""></option>
                                                            </select>
                                                            <input type="hidden" class="js-date-field__year"
                                                                name="checkin_year" value="2022">
                                                            <input type="hidden" class="js-date-field__month"
                                                                name="checkin_month" value="4">
                                                        </div>
                                                        <div class="sb-date-field__select -day js-date-field__part"
                                                            data-type="date">
                                                            <div class="sb-date-field__select-value">
                                                                <!-- <span class="js-date-field__value" data-placeholder="Check-in day">5, Tuesday</span> -->
                                                                <i
                                                                    class="sb-date-field__select-icon bicon-downchevron"></i>
                                                            </div>
                                                            <select
                                                                class="sb-date-field__select-field js-date-field__select"
                                                                name="checkin_monthday" data-selected="20"
                                                                aria-label="Check-in day" data-no-old-calendar="1">
                                                                <option value="" selected=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="sb-date-field__display" data-placeholder="Check-in Date"
                                                        data-date-format="date_with_weekday" data-display="">
                                                        Tuesday, April 5, 2022</div>
                                                    <svg class="bk-icon -streamline-arrow_nav_down sb-date-field__icon-arrow-down"
                                                        fill="#333333" focusable="false" height="18" width="18"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Check-in date  -->

                                    <!-- Check-out date -->
                                    <div class="sb-dates__col --checkout-field xp__date-time">
                                        <label for="checkout_monthday" class="sb-searchbox__label">Check-out
                                            date </label>
                                        <div class="sb-date-field__wrapper">
                                            <div class="sb-date-field b-datepicker"
                                                data-component="search/dates/date-field-select"
                                                data-calendar2-type="checkout" data-calendar2-title="Check-out">
                                                <div class="sb-searchbox__input sb-date-field__field sb-date__field-svg_icon"
                                                    data-field="">

                                                    <span
                                                        class="sb-date-field__icon sb-date-field__icon-btn bk-svg-wrapper calendar-restructure-sb">
                                                        <svg class="bk-icon -streamline-calendar sb-date-picker_icon-svg"
                                                            fill="#BDBDBD" focusable="false" height="20" width="20"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M22.502 13.5v8.25a.75.75 0 0 1-.75.75h-19.5a.75.75 0 0 1-.75-.75V5.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v8.25zm1.5 0V5.25A2.25 2.25 0 0 0 21.752 3h-19.5a2.25 2.25 0 0 0-2.25 2.25v16.5A2.25 2.25 0 0 0 2.252 24h19.5a2.25 2.25 0 0 0 2.25-2.25V13.5zm-23.25-3h22.5a.75.75 0 0 0 0-1.5H.752a.75.75 0 0 0 0 1.5zM7.502 6V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0zm10.5 0V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0z">
                                                            </path>
                                                        </svg>
                                                        <i class="sb-date-field__icon-text sb-date-field__icon-text-wide"
                                                            data-icon-day="" data-placeholder="+">6</i>
                                                    </span>

                                                    <div class="sb-date-field__controls sb-date-field__controls__ie-fix"
                                                        data-controls="" data-calendar2-cant-touch-this="">
                                                        <div class="sb-date-field__select -month-year js-date-field__part"
                                                            data-type="month-year">
                                                            <div class="sb-date-field__select-value">
                                                                <span class="js-date-field__value"
                                                                    data-placeholder="Check-out month">April
                                                                    2022</span>
                                                                <i
                                                                    class="sb-date-field__select-icon bicon-downchevron"></i>
                                                            </div>
                                                            <select
                                                                class="sb-date-field__select-field js-date-field__select"
                                                                aria-label=" Check-out month" data-no-old-calendar="1">
                                                                <option value="" disabled=""></option>

                                                            </select>
                                                        </div>


                                                        <div class="sb-date-field__select -day js-date-field__part"
                                                            data-type="date">
                                                            <div class="sb-date-field__select-value">
                                                                <span class="js-date-field__value" data-placeholder="
                                        Check-out day
                                        ">6, Wednesday</span>
                                                                <i
                                                                    class="sb-date-field__select-icon bicon-downchevron"></i>
                                                            </div>
                                                            <select
                                                                class="sb-date-field__select-field js-date-field__select"
                                                                name="checkout_monthday" data-selected="15" aria-label="
                                        Check-out day
                                        " data-no-old-calendar="1">
                                                                <option value="" disabled=""></option>


                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="sb-date-field__display"
                                                        data-placeholder="Check-out Date"
                                                        data-date-format="date_with_weekday" data-display="">
                                                        Wednesday, April 6, 2022</div>

                                                    <svg class="bk-icon -streamline-arrow_nav_down sb-date-field__icon-arrow-down"
                                                        fill="#333333" focusable="false" height="18" width="18"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                                        </path>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Check-out date -->
                                </div>
                                <!-- /Check-in & Check-out date -->

                                <!-- Data Calender -->
                                <div class="xp-calendar " data-component="search/dates/single-calendar"
                                    data-sb-id="main" data-render-los="1" data-separate-triggers="1"
                                    data-choose-mode="end">

                                    <div class="bui-calendar" style="display: none;">
                                        <div class="bui-calendar__main b-a11y-calendar-contrasts">

                                            <div class="bui-calendar__control bui-calendar__control--prev"
                                                data-bui-ref="calendar-prev">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z">
                                                    </path>
                                                </svg>
                                            </div>

                                            <div class="bui-calendar__control bui-calendar__control--next"
                                                data-bui-ref="calendar-next">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z">
                                                    </path>
                                                </svg>
                                            </div>

                                            <div class="bui-calendar__content" data-bui-ref="calendar-content">

                                                <div class="bui-calendar__wrapper" data-bui-ref="calendar-month">
                                                    <div class="bui-calendar__month"
                                                        id="bui-calendar-1647382643173yaapkwf" aria-live="polite">
                                                        April 2022</div>
                                                    <table class="bui-calendar__dates"
                                                        aria-labelledby="bui-calendar-1647382643173yaapkwf">

                                                        <thead class="bui-calendar__row">

                                                            <tr>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Mo</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Tu</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    We</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Th</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Fr</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Sa</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Su</th>
                                                            </tr>

                                                        </thead>

                                                        <tbody>

                                                            <tr class="bui-calendar__row">
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-01"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="1 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>1</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-02"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="2 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>2</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-03"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="3 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>3</span>
                                                                    </span>
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="bui-calendar__wrapper" data-bui-ref="calendar-month">
                                                    <div class="bui-calendar__month"
                                                        id="bui-calendar-1647382643173yaapkwf" aria-live="polite">
                                                        May 2022</div>
                                                    <table class="bui-calendar__dates"
                                                        aria-labelledby="bui-calendar-1647382643173yaapkwf">

                                                        <thead class="bui-calendar__row">
                                                            <tr>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Mo</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Tu</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    We</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Th</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Fr</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Sa</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Su</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>

                                                            <tr class="bui-calendar__row">
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-01"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="1 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>1</span>
                                                                    </span>
                                                                </td>
                                                            </tr>


                                                        </tbody>

                                                    </table>
                                                </div>

                                            </div>

                                            <div class="bui-calendar__display" data-bui-ref="calendar-selected-display">
                                                Tuesday, April 5, 2022 - Wednesday, April 6, 2022 (1-night
                                                stay)
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- Data Calender -->

                                <div data-component="search/dates/length-of-stay" data-sb-id="main">
                                    <div class="sb-dates__los">
                                        1-night stay
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Papole Select -->
                        <div class="sb-searchbox__row u-clearfix">
                            <div class="xp__fieldset js--sb-fieldset accommodation sb--guests__toggle_container">
                                <div class="xp__input-group xp__guests" data-component="search/group/group-with-modal"
                                    data-sb-id="main" tabindex="0" data-sb-group-show-close-button="1">
                                    <label id="xp__guests__toggle" for="xp__guests__input" class="xp__guests__toggle"
                                        data-group-toggle="" role="button" aria-expanded="false"
                                        aria-controls="xp__guests__inputs-container"
                                        data-et-click="INLGHUDSJNQQdKBUPfECIAEcOHT:3 INLGHUDSJNQQdKBUPfECIAEcOHT:4 ">
                                        <span class="xp__guests__count">
                                            <span class="adults-count" data-adults-count="">2 adults</span>
                                            ·
                                            <span data-visible="accommodation">
                                                <span class="children-count" data-children-count="">0 children</span>
                                            </span>
                                            ·
                                            <span data-visible="accommodation">
                                                <span data-room-count="">4 rooms</span>
                                            </span>
                                        </span>
                                        <svg aria-hidden="true"
                                            class="bk-icon -streamline-arrow_nav_down sb-date-field__icon-arrow-down"
                                            fill="#333333" focusable="false" height="18" role="presentation" width="18"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                            </path>
                                        </svg>
                                    </label>

                                    <div class="xp__guests__modal_container focussable " data-group-modal=""
                                        style="display: none;" role="region" aria-label="Rooms and occupancy">
                                        <div id="xp__guests__inputs-container" class="xp__guests__inputs focussable">
                                            <div data-component="search/group/group" data-sb-id="main"
                                                data-sb-width="small" data-sb-bbtool-searchbox="0"
                                                data-sb-group-children-hide="0" data-sb-group-children-ages-hide="0"
                                                data-sb-group-infants-hide="1" data-sb-group-pets-hide="0"
                                                data-sb-group-rooms-hide="0" data-sb-group-block-labels="0"
                                                data-sb-group-use_adults_label="0" data-sb-group-always-expanded="0"
                                                data-sb-group-use-bui-stepper="1"
                                                data-sb-group-bui-steppers-accessible="1"
                                                data-fe_sb_group_descriptive_dropdowns="1"
                                                data-fe_sb_universal_design="0" data-fe_sb_xpi="1"
                                                data-fe_remove_duplicate_ids="0" data-fe_sb_unique_id=""
                                                data-sb_reorder_rooms_block="1" data-sb-facelift="0"
                                                data-fe_sb_show_children_age_bracket="0"
                                                data-fe_sb_mandatory_child_ages="1"
                                                data-fe_fam_d_index_mandatory_ages_new_copy="0"
                                                data-fe_sb_dont_use_default_child_age="1">
                                                <div class="u-clearfix" data-render="">






                                                    <div class="sb-group__field sb-group__field-adults">




                                                        <div class="bui-stepper" data-bui-component="InputStepper">
                                                            <div class="bui-stepper__title-wrapper">
                                                                <label class="bui-stepper__title"
                                                                    for="group_adults">Adults</label>

                                                            </div>

                                                            <div class="bui-stepper__wrapper sb-group__stepper-a11y">
                                                                <input style="display: none" type="number"
                                                                    class="bui-stepper__input"
                                                                    data-bui-ref="input-stepper-field" id="group_adults"
                                                                    name="group_adults" min="1" max="30" value="2"
                                                                    data-group-adults-count="">
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__subtract-button "
                                                                    data-bui-ref="input-stepper-subtract-button"
                                                                    type="button" aria-label="Decrease number of Adults"
                                                                    aria-describedby="group_adults_desc">
                                                                    <span class="bui-button__text">−</span>
                                                                </button>
                                                                <span class="bui-stepper__display"
                                                                    data-bui-ref="input-stepper-value"
                                                                    aria-hidden="true">2</span>
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__add-button "
                                                                    data-bui-ref="input-stepper-add-button"
                                                                    type="button" aria-label="Increase number of Adults"
                                                                    aria-describedby="group_adults_desc">
                                                                    <span class="bui-button__text">+</span>
                                                                </button>
                                                                <span class="bui-u-sr-only" aria-live="assertive"
                                                                    id="group_adults_desc">2 Adults</span>
                                                            </div>

                                                        </div>


                                                    </div>




                                                    <div class="sb-group__field sb-group-children ">




                                                        <div class="bui-stepper" data-bui-component="InputStepper">
                                                            <div class="bui-stepper__title-wrapper">
                                                                <label class="bui-stepper__title"
                                                                    for="group_children">Children</label>

                                                            </div>

                                                            <div class="bui-stepper__wrapper sb-group__stepper-a11y">
                                                                <input style="display: none" type="number"
                                                                    class="bui-stepper__input"
                                                                    data-bui-ref="input-stepper-field"
                                                                    id="group_children" name="group_children" min="0"
                                                                    max="10" value="0" data-group-children-count="">
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__subtract-button sb-group__stepper-button-disabled"
                                                                    data-bui-ref="input-stepper-subtract-button"
                                                                    type="button"
                                                                    aria-label="Decrease number of Children"
                                                                    aria-describedby="group_children_desc">
                                                                    <span class="bui-button__text">−</span>
                                                                </button>
                                                                <span class="bui-stepper__display"
                                                                    data-bui-ref="input-stepper-value"
                                                                    aria-hidden="true">0</span>
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__add-button "
                                                                    data-bui-ref="input-stepper-add-button"
                                                                    type="button"
                                                                    aria-label="Increase number of Children"
                                                                    aria-describedby="group_children_desc">
                                                                    <span class="bui-button__text">+</span>
                                                                </button>
                                                                <span class="bui-u-sr-only" aria-live="assertive"
                                                                    id="group_children_desc">0 Children</span>
                                                            </div>

                                                        </div>




                                                    </div>







                                                    <div></div>









                                                    <div class="sb-group__field sb-group__field-rooms">


                                                        <div class="bui-stepper" data-bui-component="InputStepper">
                                                            <div class="bui-stepper__title-wrapper">
                                                                <label class="bui-stepper__title"
                                                                    for="no_rooms">Rooms</label>

                                                            </div>

                                                            <div class="bui-stepper__wrapper sb-group__stepper-a11y">
                                                                <input style="display: none" type="number"
                                                                    class="bui-stepper__input"
                                                                    data-bui-ref="input-stepper-field" id="no_rooms"
                                                                    name="no_rooms" min="1" max="30" value="4"
                                                                    data-group-rooms-count="">
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__subtract-button "
                                                                    data-bui-ref="input-stepper-subtract-button"
                                                                    type="button" aria-label="Decrease number of Rooms"
                                                                    aria-describedby="no_rooms_desc">
                                                                    <span class="bui-button__text">−</span>
                                                                </button>
                                                                <span class="bui-stepper__display"
                                                                    data-bui-ref="input-stepper-value"
                                                                    aria-hidden="true">4</span>
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__add-button "
                                                                    data-bui-ref="input-stepper-add-button"
                                                                    type="button" aria-label="Increase number of Rooms"
                                                                    aria-describedby="no_rooms_desc">
                                                                    <span class="bui-button__text">+</span>
                                                                </button>
                                                                <span class="bui-u-sr-only" aria-live="assertive"
                                                                    id="no_rooms_desc">4 Rooms</span>
                                                            </div>

                                                        </div>

                                                    </div>















                                                </div>
                                            </div>
                                            <button id="doneBtn" type="button"
                                                class="bui-button bui-button--secondary bui-button--wide">
                                                <span class="bui-button__text">
                                                    Done
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Papole Select -->

                        <div class="sb-searchbox__row u-clearfix -submit sb-searchbox__footer -last">

                            <div class="sb-searchbox-submit-col -button-messages">
                                <div class="bui-form__group sb-bui-checkbox js-sb-entire-place-checkbox">
                                    <label class="bui-checkbox">
                                        <input class="bui-checkbox__input" name="sb_entire_place" type="checkbox"
                                            value="1">
                                        <span class="bui-checkbox__label">
                                            Entire homes &amp; apartments
                                        </span>
                                    </label>
                                    <span class="sb-bui-checkbox__icon">
                                        <span class="bui-button__text">
                                            <svg class="bk-icon -streamline-question_mark_circle" fill="#333333"
                                                focusable="false" height="14" width="14" viewBox="0 0 24 24">
                                                <path
                                                    d="M9.75 9a2.25 2.25 0 1 1 3 2.122 2.25 2.25 0 0 0-1.5 2.122v1.006a.75.75 0 0 0 1.5 0v-1.006c0-.318.2-.602.5-.708A3.75 3.75 0 1 0 8.25 9a.75.75 0 1 0 1.5 0zM12 16.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </div>

                                <div class="bui-form__group sb-bui-checkbox">
                                    <label class="bui-checkbox">
                                        <input name="sb_travel_purpose" class="bui-checkbox__input" type="checkbox"
                                            value="business" checked="checked">
                                        <span class="bui-checkbox__label">
                                            I'm traveling for work
                                        </span>
                                    </label>
                                    <span class="sb-bui-checkbox__icon">
                                        <span class="bui-button__text">
                                            <svg class="bk-icon -streamline-question_mark_circle" fill="#333333"
                                                focusable="false" height="14" width="14" viewBox="0 0 24 24">
                                                <path
                                                    d="M9.75 9a2.25 2.25 0 1 1 3 2.122 2.25 2.25 0 0 0-1.5 2.122v1.006a.75.75 0 0 0 1.5 0v-1.006c0-.318.2-.602.5-.708A3.75 3.75 0 1 0 8.25 9a.75.75 0 1 0 1.5 0zM12 16.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </div>

                            </div>

                            <!-- Submit Button -->
                            <div class="sb-searchbox-submit-col -submit-button ">
                                <button type="submit" class="sb-searchbox__button ">
                                    <span>
                                        Search
                                    </span>
                                    <span class="sb-submit-helper"></span>
                                </button>
                            </div>
                            <!-- /Submit Button -->

                        </div>

                    </form>
                </div>
                <!-- /Search Box -->

                <div class="sb-searchbox__spacing"></div>


                <!-- Filter Part -->
                <div id="searchboxInc" class="dasktop-filter">
                    <div class="_962ef834c _9fff1c544 b80262405b">

                        <div class="c4d9e0d6b3 _62409d4c7">
                            <h2 class="ac6bdec376 _192b3a196 _397a46f0e">Filter by:</h2>
                        </div>

                        <div class="_962ef834c cbe47aa30e">
                            <div class="c4d9e0d6b3 bd1a25f08b">
                                <h3 class="_8ae9a3c91 _192b3a196 _397a46f0e">
                                    Your Previous Filters
                                </h3>
                            </div>
                            <div class="_dc55ee131 _8342850d1 _e8e865f5b _647205ee7 _f38115ae0">
                                <input id="__bui-c114484-1" type="checkbox" name="pri=1" value="" class="e91c2d7ef0">
                                <label for="__bui-c114484-1"
                                    class="_0e12d9386 _f9e9bb805 _667470915 _88c9d425e _bc53aec18">
                                    <span class="_7884a2946">
                                        <span class="_3ae5d40db eb8ed3499b _4b9c5f3e8">
                                            <svg viewBox="0 0 128 128">
                                                <path
                                                    d="M56.33 102a6 6 0 0 1-4.24-1.75L19.27 67.54A6.014 6.014 0 1 1 27.74 59l27.94 27.88 44-58.49a6 6 0 1 1 9.58 7.22l-48.17 64a5.998 5.998 0 0 1-4.34 2.39z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                    <div class="_f8ff3180e">
                                        <div class="_dc55ee131 _192b3a196">
                                            <div class="_ca8ac7d85">
                                                <div class="_dc55ee131 _2c4e87539">
                                                    BDT&nbsp;0 - BDT&nbsp;10,000
                                                </div>
                                                <span class="_4abc4c3d5 c261cfa50e">31</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <hr class="_b1c8687ff _a849e24be">

                        <div class="_962ef834c cbe47aa30e">
                            <div class="c4d9e0d6b3 bd1a25f08b">
                                <h3 class="_8ae9a3c91 _192b3a196 _397a46f0e">
                                    Your Budget (per night)
                                </h3>
                            </div>
                            <div>
                                <div class="_dc55ee131 fea9b5322e _215faa73a e7ffc1d59f">
                                    <input type="checkbox" name="alt_group" id="filter-style-switch-pri"
                                        class="_fd041db95">
                                    <label for="filter-style-switch-pri" class="_3dfa7ad4a">
                                        <span class="_a48a3fc0e"></span>
                                    </label>
                                </div>
                                <div></div>
                                <div></div>
                                <div></div>

                                <div class="_dc55ee131 _8342850d1 _e8e865f5b _647205ee7 _f38115ae0">
                                    <input id="__bui-c114484-2" type="checkbox" name="pri=1" value="pri=1"
                                        class="e91c2d7ef0">
                                    <label for="__bui-c114484-2"
                                        class="_0e12d9386 _f9e9bb805 _667470915 _88c9d425e _bc53aec18">
                                        <span class="_7884a2946">
                                            <span class="_3ae5d40db eb8ed3499b _4b9c5f3e8">
                                                <svg viewBox="0 0 128 128">
                                                    <path
                                                        d="M56.33 102a6 6 0 0 1-4.24-1.75L19.27 67.54A6.014 6.014 0 1 1 27.74 59l27.94 27.88 44-58.49a6 6 0 1 1 9.58 7.22l-48.17 64a5.998 5.998 0 0 1-4.34 2.39z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </span>
                                        <div class="_f8ff3180e">
                                            <div class="_dc55ee131 _192b3a196">
                                                <div class="_ca8ac7d85">
                                                    <div class="_dc55ee131 _2c4e87539">
                                                        BDT&nbsp;0 - BDT&nbsp;10,000
                                                    </div>
                                                    <span class="_4abc4c3d5 c261cfa50e">31</span>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>

                            </div>
                        </div>

                        <hr class="_b1c8687ff _a849e24be">



                        <div class="_962ef834c cbe47aa30e">
                            <div class="c4d9e0d6b3 bd1a25f08b">
                                <h3 class="_8ae9a3c91 _192b3a196 _397a46f0e">
                                    Popular for Business Travelers
                                </h3>
                            </div>
                            <div class="_dc55ee131 _8342850d1 _e8e865f5b _647205ee7 _f38115ae0">
                                <input id="__bui-c114484-7" type="checkbox" name="mealplan=1" value="mealplan=1"
                                    class="e91c2d7ef0">
                                <label for="__bui-c114484-7"
                                    class="_0e12d9386 _f9e9bb805 _667470915 _88c9d425e _bc53aec18">
                                    <span class="_7884a2946">
                                        <span class="_3ae5d40db eb8ed3499b _4b9c5f3e8">
                                            <svg viewBox="0 0 128 128">
                                                <path
                                                    d="M56.33 102a6 6 0 0 1-4.24-1.75L19.27 67.54A6.014 6.014 0 1 1 27.74 59l27.94 27.88 44-58.49a6 6 0 1 1 9.58 7.22l-48.17 64a5.998 5.998 0 0 1-4.34 2.39z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                    <div class="_f8ff3180e">
                                        <div class="_dc55ee131 _192b3a196">
                                            <div class="_ca8ac7d85">
                                                <div class="_dc55ee131 _2c4e87539">
                                                    Breakfast Included
                                                </div>
                                                <span class="_4abc4c3d5 c261cfa50e">65</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>

                        </div>
                        <hr class="_b1c8687ff _a849e24be">
                    </div>

                    <div class="map">
                        <a id="googleMap" class="loc_block_link_underline_fix map_static_zoom show_map map_static_hover" href="{{ url("#") }}" style=" height:110px;">
                            <div class="txp-map-cta-wrap">
                                <button class="txp-map-cta bui-button bui-button--primary">
                                    <span class="bui-button__text">
                                        Show on map
                                    </span>
                                </button>
                            </div>
                            <span class="map-thumb__marker--current">
                                <svg class="property-marker" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 29">
                                    <ellipse class="shadow" fill="#000000" fill-opacity="0.24" cx="9" cy="27" rx="6" ry="2">
                                    </ellipse>
                                    <path class="pin" d="M9,27 C7,27 0,16.9704016 0,9 C2.28269391e-16,4.02943725 4.02943725,0 9,0 C13.9705627,0 18,4.02943725 18,9 C18,16.9704016 11,27 9,27 Z M9,13 C11.209139,13 13,11.209139 13,9 C13,6.790861 11.209139,5 9,5 C6.790861,5 5,6.790861 5,9 C5,11.209139 6.790861,13 9,13 Z">
                                    </path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="_a9b264eb2 _0982f17e6 mobile-filter">
                    <div class="row _962ef834c c5dbf83550">
                        <div class="col-3">
                            <button type="button"
                                class="_4310f7077 _ab6816951 _61890ffeb e33c6840d8 _4cec8fb58 _28606f033 _4f61e1189"><span
                                    class="b3378cdefc c0d2c7b8d4">
                                    <span class="_3ae5d40db _4b9c5f3e8">
                                        <span class="aea0e71cc5">
                                            <span class="_3ae5d40db _e45a68485">
                                                <svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M10.28 15.22a.75.75 0 0 1 0 1.06l-4.5 4.5a.78.78 0 0 1-.24.16.73.73 0 0 1-.58 0 .78.78 0 0 1-.24-.16l-4.5-4.5a.75.75 0 1 1 1.06-1.06l3.22 3.22V3.75a.75.75 0 0 1 1.5 0v14.69l3.22-3.22a.75.75 0 0 1 1.06 0zm13.5-7.5l-4.5-4.5a.78.78 0 0 0-.28-.16.73.73 0 0 0-.58 0 .78.78 0 0 0-.24.16l-4.5 4.5a.75.75 0 1 0 1.06 1.06L18 5.56v14.69a.75.75 0 0 0 1.5 0V5.56l3.22 3.22a.75.75 0 0 0 1.06 0 .75.75 0 0 0 0-1.06z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                <span class="_b61fba663">
                                    Sort
                                    <select class="_c073149bf">
                                        <option selected="" value="">Most recommended</option>
                                        <option value="">Distance from city centre
                                        </option>
                                        <option value="">Best reviewed and lowest
                                            price</option>
                                        <option value="">Price (lowest first)</option>
                                        <option value="">Top reviewed</option>
                                        <option value="">Homes &amp; apartments first</option>
                                        <option value="">Star rating and price</option>
                                    </select>
                                </span>
                            </button>
                        </div>
                        <div class="col-3">
                            <button type="button" id="mobile-filter-btn"
                                class="_4310f7077 _ab6816951 _61890ffeb e33c6840d8 _4cec8fb58 _28606f033">
                                <span class="b3378cdefc c0d2c7b8d4">
                                    <span class="_3ae5d40db _4b9c5f3e8">
                                        <span class="aea0e71cc5">
                                            <span class="_3ae5d40db _e45a68485">
                                                <svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M.75 4.5h16.34a3.5 3.5 0 1 0 0-1.5H.75a.75.75 0 0 0 0 1.5zM20.5 1.75a2 2 0 1 1-2 2 2 2 0 012-2zm2.75 17.75H9.46a3.5 3.5 0 0 0-6.83 0H.75a.75.75 0 0 0 0 1.5h1.88a3.5 3.5 0 0 0 6.83 0h13.79a.75.75 0 0 0 0-1.5zm-17.2 2.75a2 2 0 1 1 2-2 2 2 0 01-2 2zM23.25 11h-7.84a3.49 3.49 0 0 0-6.82 0H.75a.75.75 0 0 0 0 1.5h7.84a3.49 3.49 0 0 0 6.82 0h7.84a.75.75 0 0 0 0-1.5zM12 13.75a2 2 0 1 1 2-2 2 2 0 0 1-2 2z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                <span class="_b61fba663">Filter</span>
                            </button>
                        </div>
                        <div class="col-3">
                            <button type="button"
                                class="_4310f7077 _ab6816951 _61890ffeb e33c6840d8 _4cec8fb58 _28606f033">
                                <span class="b3378cdefc c0d2c7b8d4">
                                    <span class="_3ae5d40db _4b9c5f3e8">
                                        <span class="aea0e71cc5">
                                            <span class="_3ae5d40db _e45a68485">
                                                <svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M24 9V4.65c0-.92-.56-1.748-1.415-2.09l-6-2.4a2.25 2.25 0 0 0-1.67 0L8.527 2.717a.75.75 0 0 1-.557 0L2.058.35A1.5 1.5 0 0 0 0 1.75v14.369c0 .92.56 1.748 1.415 2.09l6 2.4a2.25 2.25 0 0 0 1.67 0l2.882-1.154a.75.75 0 0 0-.558-1.392l-2.88 1.153a.75.75 0 0 1-.558 0l-6-2.4a.75.75 0 0 1-.471-.697V1.746v-.004l5.914 2.366a2.25 2.25 0 0 0 1.671 0l6.387-2.555a.75.75 0 0 1 .557 0l6 2.4a.75.75 0 0 1 .471.697V9A.75.75 0 0 0 24 9zM7.5 3.519v16.5a.75.75 0 0 0 1.5 0v-16.5a.75.75 0 0 0-1.5 0zM15 .75v7.5a.75.75 0 0 0 1.5 0V.75a.75.75 0 0 0-1.5 0zm3.75 15.449a.375.375 0 0 1-.375-.375.75.75 0 0 0 1.5 0c0-.621-.504-1.125-1.125-1.125a.75.75 0 0 0 0 1.5zm.375-.375a.375.375 0 0 1-.375.375.75.75 0 0 0 0-1.5c-.621 0-1.125.504-1.125 1.125a.75.75 0 0 0 1.5 0zm-.375-.374c.207 0 .375.168.375.375a.75.75 0 0 0-1.5 0c0 .621.504 1.125 1.125 1.125a.75.75 0 0 0 0-1.5zm-.375.374c0-.207.168-.375.375-.375a.75.75 0 0 0 0 1.5c.621 0 1.125-.504 1.125-1.125a.75.75 0 0 0-1.5 0zm.375-3.75a3.75 3.75 0 0 1 3.75 3.75c0 1.302-1.618 3.948-3.75 6.676-2.13-2.722-3.75-5.374-3.75-6.676a3.75 3.75 0 0 1 3.75-3.75zm0-1.5a5.25 5.25 0 0 0-5.25 5.25c0 1.798 1.68 4.548 4.068 7.6a1.498 1.498 0 0 0 2.364 0c2.391-3.06 4.068-5.802 4.068-7.6 0-2.9-2.35-5.25-5.25-5.25z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                <span class="_b61fba663">Map</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- /Filter Part -->

            </div> --}}
            <!-- Left Side -->

            <!-- Right Side -->
            <div class="col-lg-9 mt-5">

                <!-- Right Side Header -->
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="_30227359d _0db903e42">{{ request()->search_data }}: {{ $properties->count() }}
                            properties found</h1>
                    </div>
                    {{-- <div class="col-md-4">
                        <div class="text-end">
                            <span class="_4310f7077 _ab6816951 _03eb8c30a e33c6840d8 _aa53125bf d5d3b6ba8f">
                                <span class="_b61fba663">Show on map</span>
                            </span>
                        </div>
                    </div> --}}
                </div>
                <!-- Right Side Header -->

                <!-- Search Result Wraper -->
                <div class="row">
                    <div class="col-12">

                        <!-- Search Header For Dasktop -->
                        <div class="row">
                            <div class="col-12 fd9ddecf26 _a18b9c14c c292f143b4 dasktop-search-header">
                                <ul class="a5e528f0c0 nav nav-tabs" id="myTab" role="tablist">
                                    <li class="c266cda126  dasktop-search-item nav-item" role="presentation">
                                        <a href="{{ url('#') }}" class="a5b679fa41 active" data-bs-toggle="tab"
                                            data-bs-target="#tab1">All results</a>
                                    </li>
                                    <li class="c266cda126 dasktop-search-item nav-item" role="presentation">
                                        <a href="{{ url('#') }}" class="a5b679fa41" data-bs-toggle="tab"
                                            data-bs-target="#tab2">lowest Price</a>
                                    </li>
                                    {{-- <li class="c266cda126 dasktop-search-item nav-item" role="presentation">
                                        <a href="{{ url('#') }}" class="a5b679fa41" data-bs-toggle="tab"
                                            data-bs-target="#tab3">Best
                                            Reviewed</a>
                                    </li> --}}
                                    <li class="c266cda126 dasktop-search-item nav-item" role="presentation">
                                        <a href="{{ url('#') }}" class="a5b679fa41" data-bs-toggle="tab"
                                            data-bs-target="#tab4">Highest Price</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- Search Header For Dasktop -->


                        <!-- Search Result Table -->
                        <div class="row">
                            <div class="col-12">

                                <!-- Top picks for long stays -->
                                <div class="row">

                                    <!-- Single  -->
                                    <div class="col-12 mb-3 tab-content" id="myTabContent">


                                        <div class="_fe1927d9e _0811a1b54 _a8a1be610 _022ee35ec b9c27d6646 fb3c4512b4 tab-pane fade show active"
                                            id="tab1" role="tabpanel" aria-labelledby="tab1">
                                            @foreach ($properties as $property)
                                                <x-search-result-item :property="$property" />
                                            @endforeach

                                            {{-- <div class="row mb-5">

                                                <div class="col-md-3 col-sm-12">
                                                    <div class="a5c3ef8268">
                                                        <div class="_1625d284f">
                                                            <div class="_a9ad2d05c">Breakfast included</div>
                                                        </div>
                                                        <a href="{{ url("#") }}" target="_blank">
                                                            <img src="{{ asset("/frontend/assets/images/search-top-picks-1.webp") }}"
                                                                alt="Images" class="w-100">
                                                        </a>

                                                        <!-- Love Button -->
                                                        <div class="aed6b4fa5f">
                                                            <span class="e36b9d9c39">
                                                                <button class="b3955c2df2">
                                                                    <span class="_3ae5d40db f2a905ef88 _4de7b1cb8">
                                                                        <svg viewBox="0 0 128 128" width="1em"
                                                                            height="1em">
                                                                            <path
                                                                                d="M64 112a3.6 3.6 0 0 1-2-.5 138.8 138.8 0 0 1-44.2-38c-10-14.4-10.6-26-9.4-33.2a29 29 0 0 1 22.9-23.7c11.9-2.4 24 2.5 32.7 13a33.7 33.7 0 0 1 32.7-13 29 29 0 0 1 22.8 23.7c1.3 7.2.6 18.8-9.3 33.3-9.1 13.1-24 25.9-44.2 37.9a3.6 3.6 0 0 1-2 .5z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                        <!-- Love Button -->
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-sm-12 mt-md-3 mt-sm-4">
                                                    <div class="_84f6fd780 _f98eca565">

                                                        <div class="row">
                                                            <div class="col-8">
                                                                <div class="_84f6fd780 _d90c09a35">
                                                                    <div class="_29c344764">
                                                                        <div class="_12369ea61">
                                                                            <h3 class="_23bf57b84">
                                                                                <a href="{{ url("#") }}" target="_blank"
                                                                                    class="fb01724e5b">
                                                                                    <div class="fde444d7ef _c445487e2">
                                                                                        Nascent Gardenia Baridhara
                                                                                    </div>
                                                                                    <div class="_c1c7d8954">
                                                                                        window
                                                                                    </div>
                                                                                </a>
                                                                            </h3>
                                                                            <div class="d45fac9874">
                                                                                <span class="e36b9d9c39">
                                                                                    <div class="c84c5d6659">
                                                                                        <div class="_bebcf8d60">
                                                                                            <span
                                                                                                class="_3ae5d40db _617879812 _6ab38b430">
                                                                                                <svg
                                                                                                    viewBox="0 0 24 24">
                                                                                                    <path
                                                                                                        d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </span>
                                                                                            <span
                                                                                                class="_3ae5d40db _617879812 _6ab38b430">
                                                                                                <svg
                                                                                                    viewBox="0 0 24 24">
                                                                                                    <path
                                                                                                        d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </span>
                                                                                            <span
                                                                                                class="_3ae5d40db _617879812 _6ab38b430">
                                                                                                <svg
                                                                                                    viewBox="0 0 24 24">
                                                                                                    <path
                                                                                                        d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </span>
                                                                                            <span
                                                                                                class="_3ae5d40db _617879812 _6ab38b430">
                                                                                                <svg
                                                                                                    viewBox="0 0 24 24">
                                                                                                    <path
                                                                                                        d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                            <span class="e36b9d9c39">
                                                                                <span
                                                                                    class="_3ae5d40db a892149490 _5a4763c60 _5a3a8722d b557ea9051">
                                                                                    <svg viewBox="0 0 28.52 16">
                                                                                        <rect width="28.52" height="16"
                                                                                            fill="#febb02" rx="1.22"
                                                                                            ry="1.22">
                                                                                        </rect>
                                                                                        <path fill="#fff"
                                                                                            d="M12.27 13.26H6.76V7.43l1.29-3.89c.65-2.27 2.6-1.62 1.95.32l-.65 2.27h4.22a1.19 1.19 0 0 1 1 1.94 1.36 1.36 0 0 1 0 1.95A1.41 1.41 0 0 1 13.9 12s0 1.26-1.63 1.26zm-9.44 0V7.42H6v5.84zm17.36-9.09a2 2 0 0 0-.1.91v1.49h-1.48a2.29 2.29 0 0 0-.92.09.93.93 0 0 0-.38.38 2.29 2.29 0 0 0-.09.92v.09a2.23 2.23 0 0 0 .09.91.87.87 0 0 0 .38.38 2.08 2.08 0 0 0 .92.1h1.48v1.48a2.08 2.08 0 0 0 .1.92.87.87 0 0 0 .38.38 2.23 2.23 0 0 0 .91.09h.1a2.23 2.23 0 0 0 .91-.09.87.87 0 0 0 .38-.38 2.08 2.08 0 0 0 .1-.92V9.44h1.48a2 2 0 0 0 .91-.1.78.78 0 0 0 .38-.34 2 2 0 0 0 .1-.91V8a2.08 2.08 0 0 0-.1-.92.82.82 0 0 0-.38-.38 2.21 2.21 0 0 0-.91-.09H23V5.08a2 2 0 0 0-.1-.91.78.78 0 0 0-.38-.38 2 2 0 0 0-.91-.1h-.1a2 2 0 0 0-.91.1.78.78 0 0 0-.41.38z">
                                                                                        </path>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>
                                                                            <span class="e36b9d9c39">
                                                                                <span
                                                                                    class="_4abc4c3d5 ffe1efcb1b _20015f850">
                                                                                    <span>Promoted</span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_29c344764">
                                                                        <div class="_cff98816f">
                                                                            <a target="_blank" href="{{ url("#") }}"
                                                                                class="_4310f7077 _45807dae0 _89c03ca2c _f7538b398">
                                                                                <span>
                                                                                    <span
                                                                                        class="af1ddfc958 eba89149fb">Dhaka</span>
                                                                                    <span
                                                                                        class="af1ddfc958 eba89149fb">Show
                                                                                        on map</span>
                                                                                </span>
                                                                            </a>
                                                                            <span class="af1ddfc958">
                                                                                <span class="e36b9d9c39">
                                                                                    <span>9.1 km from center</span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_29c344764">
                                                                        <div class="_4abc4c3d5 _192b3a196 ee57f184b9">
                                                                            <span
                                                                                class="_3ae5d40db _e806ca064 _4b9c5f3e8">
                                                                                <svg viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M21.22 3.37a.75.75 0 00-.6-.59c-4.85-.9-10.6.55-13.37 3.36S3.1 14.39 3.88 19.05L2 21a.75.75 0 000 1 .74.74 0 00.53.22A.71.71 0 003 22l2-1.9a16.94 16.94 0 002.76.23c4.09 0 8.19-1.33 10.35-3.52 2.71-2.81 4.07-8.59 3.11-13.44zM17 15.75c-2.11 2.14-6.59 3.36-10.7 3L16.59 8.47a.75.75 0 000-1.06.77.77 0 00-1.07 0l-10.3 10.3c-.33-3.91.91-8.31 3.1-10.52s7.29-3.63 11.52-3c.67 4.22-.54 9.22-2.84 11.56z">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="_2c7126bf4">Travel
                                                                                Sustainable property</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="_84f6fd780 a7b7310a00 df42919a5a">
                                                                    <div class="_29c344764">
                                                                        <div class="_84f6fd780 _d90c09a35">
                                                                            <div class="_29c344764"><a target="_blank"
                                                                                    rel="noopener noreferrer"
                                                                                    data-testid="review-score-link"
                                                                                    href="{{ url("#") }}"
                                                                                    class="_4310f7077 _45807dae0 _ab99fb427 _f7538b398"><span>
                                                                                        <div data-testid="review-score"
                                                                                            class="_0e12d9386 _d81584806 _667470915 _6e13af835 _88c9d425e a6b95f6195 _479ad76cf e18ef83843">
                                                                                            <div aria-label="Scored 9.0 "
                                                                                                class="_9c5f726ff bd528f9ea6">
                                                                                                9.0
                                                                                            </div>
                                                                                            <div
                                                                                                class="_f8ff3180e b8710dea1b">
                                                                                                <div aria-label="Wonderful"
                                                                                                    class="_9c5f726ff _192b3a196 f1cbb919ef">
                                                                                                    Wonderful
                                                                                                </div>
                                                                                                <div
                                                                                                    class="_4abc4c3d5 _1e6021d2f _6e869d6e0">
                                                                                                    9
                                                                                                    reviews
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Top -->

                                                        <!-- /Top -->
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="">
                                                                    <span
                                                                        class="_4abc4c3d5 ffe1efcb1b _f3c918a6b _20015f850">
                                                                        <span>Recommended
                                                                            for your group</span>
                                                                    </span>
                                                                    <div role="none" tabindex="0"
                                                                        class="_b680240d2 _1de3c61eb ea9073ffc9">
                                                                        <div class="_83011992b"><span
                                                                                class="a9277b5c5c">1×</span>
                                                                        </div>
                                                                        <div class="_371410fad">
                                                                            <div role="link" tabindex="0"
                                                                                class="_4abc4c3d5">
                                                                                <span class="_c5d12bf22">Premium
                                                                                    Twin Room</span>
                                                                            </div>
                                                                            <div class="_2075f7b46">
                                                                                <div class="_4abc4c3d5">
                                                                                    2 twin beds
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div role="none" tabindex="0"
                                                                        class="_b680240d2 _1de3c61eb ea9073ffc9">
                                                                        <div class="_83011992b"><span
                                                                                class="a9277b5c5c">3×</span>
                                                                        </div>
                                                                        <div class="_371410fad">
                                                                            <div role="link" tabindex="0"
                                                                                class="_4abc4c3d5">
                                                                                <span class="_c5d12bf22">Deluxe
                                                                                    Room</span></div>
                                                                            <div class="_2075f7b46">
                                                                                YwO
                                                                                <div class="_4abc4c3d5">
                                                                                    3 queen beds
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="_84f6fd780  _f98eca565">
                                                                    <div class="_29c344764">
                                                                        <div class="_9b21dfb78">
                                                                            <div class="_84f6fd780 _f98eca565">
                                                                                <div class="_29c344764">
                                                                                    <div>
                                                                                        <div
                                                                                            class="_4abc4c3d5 _7ee1c7d14">
                                                                                            26 nights, 4 adults, 2
                                                                                            children
                                                                                        </div>
                                                                                        <div
                                                                                            class="c5246b6797 _5aba9d433">
                                                                                            <span
                                                                                                class="fde444d7ef _e885fdc12">BDT&nbsp;652,912</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="_4abc4c3d5 d8eecffad4">
                                                                                            +BDT&nbsp;173,022 taxes
                                                                                            and charges
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_29c344764">
                                                                        <div class="_9af04e659"><span
                                                                                class="e36b9d9c39"><span
                                                                                    class="_4abc4c3d5 ffe1efcb1b f7c4fe5ac0 e7a9e76a8c">
                                                                                    <span>Earn
                                                                                        BDT&nbsp;57,815
                                                                                        Credits</span>
                                                                                </span>
                                                                                <span class="_c1c7d8954">
                                                                                    You’ll
                                                                                    earn
                                                                                    <b class="_141fb08ee">BDT&nbsp;57,815
                                                                                        Credits</b> on
                                                                                    this
                                                                                    booking. It'll be
                                                                                    added to
                                                                                    your Wallet 14 days
                                                                                    after
                                                                                    your
                                                                                    stay.
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_29c344764">
                                                                        <div class="f0b5ba03dc">
                                                                            <a role="button" target="_blank"
                                                                                href="{{ url("booking-step-one.html") }}"
                                                                                class="_4310f7077 _ab6816951 _03eb8c30a e33c6840d8 _aa53125bf _c846a17ec"><span
                                                                                    class="_b61fba663">See
                                                                                    availability</span>
                                                                                <span class="b3378cdefc e54c97f7c7">
                                                                                    <span class="_3ae5d40db _4b9c5f3e8">
                                                                                        <span
                                                                                            class="_3ae5d40db _d3dabd65e _4b9c5f3e8">
                                                                                            <svg viewBox="0 0 24 24">
                                                                                                <path
                                                                                                    d="M9.45 6c.2 0 .39.078.53.22l5 5c.208.206.323.487.32.78a1.1 1.1 0 0 1-.32.78l-5 5a.75.75 0 0 1-1.06 0 .74.74 0 0 1 0-1.06L13.64 12 8.92 7.28a.74.74 0 0 1 0-1.06.73.73 0 0 1 .53-.22zm4.47 5.72zm0 .57z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Buttom-->

                                                        <!-- /Buttom-->

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row mb-5">

                                                <div class="col-md-3 col-sm-12">
                                                    <div class="a5c3ef8268">
                                                        <div class="_1625d284f">
                                                            <div class="_a9ad2d05c">Breakfast included</div>
                                                        </div>
                                                        <a href="{{ url("#") }}" target="_blank">
                                                            <img src="{{ asset("/frontend/assets/images/search-top-picks-1.webp") }}"
                                                                alt="Images" class="w-100">
                                                        </a>

                                                        <!-- Love Button -->
                                                        <div class="aed6b4fa5f">
                                                            <span class="e36b9d9c39">
                                                                <button class="b3955c2df2">
                                                                    <span class="_3ae5d40db f2a905ef88 _4de7b1cb8">
                                                                        <svg viewBox="0 0 128 128" width="1em"
                                                                            height="1em">
                                                                            <path
                                                                                d="M64 112a3.6 3.6 0 0 1-2-.5 138.8 138.8 0 0 1-44.2-38c-10-14.4-10.6-26-9.4-33.2a29 29 0 0 1 22.9-23.7c11.9-2.4 24 2.5 32.7 13a33.7 33.7 0 0 1 32.7-13 29 29 0 0 1 22.8 23.7c1.3 7.2.6 18.8-9.3 33.3-9.1 13.1-24 25.9-44.2 37.9a3.6 3.6 0 0 1-2 .5z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                        <!-- Love Button -->
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-sm-12 mt-md-3 mt-sm-4">
                                                    <div class="_84f6fd780 _f98eca565">

                                                        <div class="row">
                                                            <div class="col-8">
                                                                <div class="_84f6fd780 _d90c09a35">
                                                                    <div class="_29c344764">
                                                                        <div class="_12369ea61">
                                                                            <h3 class="_23bf57b84">
                                                                                <a href="{{ url("#") }}" target="_blank"
                                                                                    class="fb01724e5b">
                                                                                    <div class="fde444d7ef _c445487e2">
                                                                                        Nascent Gardenia Baridhara
                                                                                    </div>
                                                                                    <div class="_c1c7d8954">
                                                                                        window
                                                                                    </div>
                                                                                </a>
                                                                            </h3>
                                                                            <div class="d45fac9874">
                                                                                <span class="e36b9d9c39">
                                                                                    <div class="c84c5d6659">
                                                                                        <div class="_bebcf8d60">
                                                                                            <span
                                                                                                class="_3ae5d40db _617879812 _6ab38b430">
                                                                                                <svg
                                                                                                    viewBox="0 0 24 24">
                                                                                                    <path
                                                                                                        d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </span>
                                                                                            <span
                                                                                                class="_3ae5d40db _617879812 _6ab38b430">
                                                                                                <svg
                                                                                                    viewBox="0 0 24 24">
                                                                                                    <path
                                                                                                        d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </span>
                                                                                            <span
                                                                                                class="_3ae5d40db _617879812 _6ab38b430">
                                                                                                <svg
                                                                                                    viewBox="0 0 24 24">
                                                                                                    <path
                                                                                                        d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </span>
                                                                                            <span
                                                                                                class="_3ae5d40db _617879812 _6ab38b430">
                                                                                                <svg
                                                                                                    viewBox="0 0 24 24">
                                                                                                    <path
                                                                                                        d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                            <span class="e36b9d9c39">
                                                                                <span
                                                                                    class="_3ae5d40db a892149490 _5a4763c60 _5a3a8722d b557ea9051">
                                                                                    <svg viewBox="0 0 28.52 16">
                                                                                        <rect width="28.52" height="16"
                                                                                            fill="#febb02" rx="1.22"
                                                                                            ry="1.22">
                                                                                        </rect>
                                                                                        <path fill="#fff"
                                                                                            d="M12.27 13.26H6.76V7.43l1.29-3.89c.65-2.27 2.6-1.62 1.95.32l-.65 2.27h4.22a1.19 1.19 0 0 1 1 1.94 1.36 1.36 0 0 1 0 1.95A1.41 1.41 0 0 1 13.9 12s0 1.26-1.63 1.26zm-9.44 0V7.42H6v5.84zm17.36-9.09a2 2 0 0 0-.1.91v1.49h-1.48a2.29 2.29 0 0 0-.92.09.93.93 0 0 0-.38.38 2.29 2.29 0 0 0-.09.92v.09a2.23 2.23 0 0 0 .09.91.87.87 0 0 0 .38.38 2.08 2.08 0 0 0 .92.1h1.48v1.48a2.08 2.08 0 0 0 .1.92.87.87 0 0 0 .38.38 2.23 2.23 0 0 0 .91.09h.1a2.23 2.23 0 0 0 .91-.09.87.87 0 0 0 .38-.38 2.08 2.08 0 0 0 .1-.92V9.44h1.48a2 2 0 0 0 .91-.1.78.78 0 0 0 .38-.34 2 2 0 0 0 .1-.91V8a2.08 2.08 0 0 0-.1-.92.82.82 0 0 0-.38-.38 2.21 2.21 0 0 0-.91-.09H23V5.08a2 2 0 0 0-.1-.91.78.78 0 0 0-.38-.38 2 2 0 0 0-.91-.1h-.1a2 2 0 0 0-.91.1.78.78 0 0 0-.41.38z">
                                                                                        </path>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>
                                                                            <span class="e36b9d9c39">
                                                                                <span
                                                                                    class="_4abc4c3d5 ffe1efcb1b _20015f850">
                                                                                    <span>Promoted</span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_29c344764">
                                                                        <div class="_cff98816f">
                                                                            <a target="_blank" href="{{ url("#") }}"
                                                                                class="_4310f7077 _45807dae0 _89c03ca2c _f7538b398">
                                                                                <span>
                                                                                    <span
                                                                                        class="af1ddfc958 eba89149fb">Dhaka</span>
                                                                                    <span
                                                                                        class="af1ddfc958 eba89149fb">Show
                                                                                        on map</span>
                                                                                </span>
                                                                            </a>
                                                                            <span class="af1ddfc958">
                                                                                <span class="e36b9d9c39">
                                                                                    <span>9.1 km from center</span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_29c344764">
                                                                        <div class="_4abc4c3d5 _192b3a196 ee57f184b9">
                                                                            <span
                                                                                class="_3ae5d40db _e806ca064 _4b9c5f3e8">
                                                                                <svg viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M21.22 3.37a.75.75 0 00-.6-.59c-4.85-.9-10.6.55-13.37 3.36S3.1 14.39 3.88 19.05L2 21a.75.75 0 000 1 .74.74 0 00.53.22A.71.71 0 003 22l2-1.9a16.94 16.94 0 002.76.23c4.09 0 8.19-1.33 10.35-3.52 2.71-2.81 4.07-8.59 3.11-13.44zM17 15.75c-2.11 2.14-6.59 3.36-10.7 3L16.59 8.47a.75.75 0 000-1.06.77.77 0 00-1.07 0l-10.3 10.3c-.33-3.91.91-8.31 3.1-10.52s7.29-3.63 11.52-3c.67 4.22-.54 9.22-2.84 11.56z">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="_2c7126bf4">Travel
                                                                                Sustainable property</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="_84f6fd780 a7b7310a00 df42919a5a">
                                                                    <div class="_29c344764">
                                                                        <div class="_84f6fd780 _d90c09a35">
                                                                            <div class="_29c344764"><a target="_blank"
                                                                                    rel="noopener noreferrer"
                                                                                    data-testid="review-score-link"
                                                                                    href="{{ url("#") }}"
                                                                                    class="_4310f7077 _45807dae0 _ab99fb427 _f7538b398"><span>
                                                                                        <div data-testid="review-score"
                                                                                            class="_0e12d9386 _d81584806 _667470915 _6e13af835 _88c9d425e a6b95f6195 _479ad76cf e18ef83843">
                                                                                            <div aria-label="Scored 9.0 "
                                                                                                class="_9c5f726ff bd528f9ea6">
                                                                                                9.0
                                                                                            </div>
                                                                                            <div
                                                                                                class="_f8ff3180e b8710dea1b">
                                                                                                <div aria-label="Wonderful"
                                                                                                    class="_9c5f726ff _192b3a196 f1cbb919ef">
                                                                                                    Wonderful
                                                                                                </div>
                                                                                                <div
                                                                                                    class="_4abc4c3d5 _1e6021d2f _6e869d6e0">
                                                                                                    9
                                                                                                    reviews
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Top -->

                                                        <!-- /Top -->
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="">
                                                                    <span
                                                                        class="_4abc4c3d5 ffe1efcb1b _f3c918a6b _20015f850">
                                                                        <span>Recommended
                                                                            for your group</span>
                                                                    </span>
                                                                    <div role="none" tabindex="0"
                                                                        class="_b680240d2 _1de3c61eb ea9073ffc9">
                                                                        <div class="_83011992b"><span
                                                                                class="a9277b5c5c">1×</span>
                                                                        </div>
                                                                        <div class="_371410fad">
                                                                            <div role="link" tabindex="0"
                                                                                class="_4abc4c3d5">
                                                                                <span class="_c5d12bf22">Premium
                                                                                    Twin Room</span>
                                                                            </div>
                                                                            <div class="_2075f7b46">
                                                                                <div class="_4abc4c3d5">
                                                                                    2 twin beds
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div role="none" tabindex="0"
                                                                        class="_b680240d2 _1de3c61eb ea9073ffc9">
                                                                        <div class="_83011992b"><span
                                                                                class="a9277b5c5c">3×</span>
                                                                        </div>
                                                                        <div class="_371410fad">
                                                                            <div role="link" tabindex="0"
                                                                                class="_4abc4c3d5">
                                                                                <span class="_c5d12bf22">Deluxe
                                                                                    Room</span></div>
                                                                            <div class="_2075f7b46">
                                                                                YwO
                                                                                <div class="_4abc4c3d5">
                                                                                    3 queen beds
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="_84f6fd780  _f98eca565">
                                                                    <div class="_29c344764">
                                                                        <div class="_9b21dfb78">
                                                                            <div class="_84f6fd780 _f98eca565">
                                                                                <div class="_29c344764">
                                                                                    <div>
                                                                                        <div
                                                                                            class="_4abc4c3d5 _7ee1c7d14">
                                                                                            26 nights, 4 adults, 2
                                                                                            children
                                                                                        </div>
                                                                                        <div
                                                                                            class="c5246b6797 _5aba9d433">
                                                                                            <span
                                                                                                class="fde444d7ef _e885fdc12">BDT&nbsp;652,912</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="_4abc4c3d5 d8eecffad4">
                                                                                            +BDT&nbsp;173,022 taxes
                                                                                            and charges
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_29c344764">
                                                                        <div class="_9af04e659"><span
                                                                                class="e36b9d9c39"><span
                                                                                    class="_4abc4c3d5 ffe1efcb1b f7c4fe5ac0 e7a9e76a8c">
                                                                                    <span>Earn
                                                                                        BDT&nbsp;57,815
                                                                                        Credits</span>
                                                                                </span>
                                                                                <span class="_c1c7d8954">
                                                                                    You’ll
                                                                                    earn
                                                                                    <b class="_141fb08ee">BDT&nbsp;57,815
                                                                                        Credits</b> on
                                                                                    this
                                                                                    booking. It'll be
                                                                                    added to
                                                                                    your Wallet 14 days
                                                                                    after
                                                                                    your
                                                                                    stay.
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_29c344764">
                                                                        <div class="f0b5ba03dc">
                                                                            <a role="button" target="_blank"
                                                                                href="{{ url("booking-step-one.html") }}"
                                                                                class="_4310f7077 _ab6816951 _03eb8c30a e33c6840d8 _aa53125bf _c846a17ec"><span
                                                                                    class="_b61fba663">See
                                                                                    availability</span>
                                                                                <span class="b3378cdefc e54c97f7c7">
                                                                                    <span class="_3ae5d40db _4b9c5f3e8">
                                                                                        <span
                                                                                            class="_3ae5d40db _d3dabd65e _4b9c5f3e8">
                                                                                            <svg viewBox="0 0 24 24">
                                                                                                <path
                                                                                                    d="M9.45 6c.2 0 .39.078.53.22l5 5c.208.206.323.487.32.78a1.1 1.1 0 0 1-.32.78l-5 5a.75.75 0 0 1-1.06 0 .74.74 0 0 1 0-1.06L13.64 12 8.92 7.28a.74.74 0 0 1 0-1.06.73.73 0 0 1 .53-.22zm4.47 5.72zm0 .57z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Buttom-->

                                                        <!-- /Buttom-->

                                                    </div>
                                                </div>

                                            </div> --}}

                                        </div>

                                        <div class="_fe1927d9e _0811a1b54 _a8a1be610 _022ee35ec b9c27d6646 fb3c4512b4 tab-pane fade"
                                            id="tab2" role="tabpanel" aria-labelledby="tab2">
                                            @foreach ($lowestPrice as $property)
                                                <x-search-result-item :property="$property" />
                                            @endforeach

                                        </div>


                                        <div class="_fe1927d9e _0811a1b54 _a8a1be610 _022ee35ec b9c27d6646 fb3c4512b4 tab-pane fade"
                                            id="tab3" role="tabpanel" aria-labelledby="tab3">
                                            @foreach ($lowestPrice as $property)
                                                <x-search-result-item :property="$property" />
                                            @endforeach
                                        </div>


                                        <div class="_fe1927d9e _0811a1b54 _a8a1be610 _022ee35ec b9c27d6646 fb3c4512b4 tab-pane fade"
                                            id="tab4" role="tabpanel" aria-labelledby="tab4">
                                            @foreach ($heighestPrice as $property)
                                                <x-search-result-item :property="$property" />
                                            @endforeach

                                        </div>


                                    </div>
                                    <!-- Single  -->



                                </div>
                                <!-- /Top picks for long stays -->


                            </div>
                        </div>
                        <!-- Search Result Table -->
                    </div>

                </div>
                <!-- /Search Result Wraper -->

            </div>
            <!-- /Right Side -->

        </div>

    </div>
    <!-- Page Content -->
@endsection
@section('js')

@endsection
