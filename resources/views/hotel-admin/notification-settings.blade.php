@extends('hotel-admin.layout')
@section('css-imports')
    <!-- Bootstrap v5.0.0-beta3 -->
    <link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/bootstrap.min.css") }}">
    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/all.min.css") }}">

    <link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/style.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/pages/facilities-services.min.css") }}">

@endsection
@section('content')
<!-- Main Content -->
<div class="bui-container bui-container--center">
    <main id="content" class="">
        <div class="page-body ">

            <div class="page-header-component-title th__page-header ">

                <div class="row">
                    <div class="th__page-header__content col-md-12">
                        <h1 class="th__page-header__title">
                            Notification settings
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 main-content">
                    <form role="form" class="show-when-ready" id="add_property_details" action="notification-settings"
                        method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$notificationSetting->id}}"/>
                        <div class="page_description">
                            <p>Here you can adjust if and when you'd like to receive various
                                notifications.</p>
                        </div>

                        <fieldset>
                            <legend>Arrival Notifications</legend>

                            <div class="form-group">
                                <label>Do you want to receive an email with a daily overview of your
                                    reservations?

                                </label>

                                <div class="radio-block" id="arrival_notification">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="get_email_notification"
                                                @checked($notificationSetting->get_email_notification)
                                                value="1">
                                            <span>Yes</span>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="get_email_notification"
                                                value="0" @checked(!$notificationSetting->get_email_notification)>
                                            <span>No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="arrival_notification_settings">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="" for="arrival_notification_email_at">I'd
                                                like to receive an email between: </label>
                                            <select id="arrival_notification_email_at"
                                                name="email_time_channel"
                                                class="form-control " style="">
                                                <option value="0">00:00 - 01:00</option>
                                                <option value="1">01:00 - 02:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="arrival_notification_settings">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="" for="arrival_notification_email">Send an
                                                overview to this address: </label>
                                            <select id="arrival_notification_email"
                                                name=""
                                                class="form-control " style="">
                                                <option value="370577015">{{$notificationSetting->email}}</option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>


                        <fieldset>
                            <legend>Text Message Notifications</legend>
                            <div class="form-group">
                                <label>In addition to email confirmations, do you want to receive
                                    autodialed texts for last-minute reservations by Booking.com?
                                    Message and data rates may apply.

                                </label>

                                <div class="radio-block" id="receive_sms">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="get_sms_notification" value="1"
                                            @checked($notificationSetting->get_sms_notification)>
                                            <span>Yes</span>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="get_sms_notification" value="0"
                                                @checked(!$notificationSetting->get_sms_notification)>
                                            <span>No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="smsconfirmation_settings">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="form-group">

                                            <label for="phone_text_messages">Phone number</label>

                                            <div class="intl-tel-input">
                                                <input type="tel" id="" name="phone" value="{{$notificationSetting->phone}}"
                                                    class="form-control form-control"
                                                    placeholder="+880 2-7111234">

                                            </div>
                                            <span class="help-block"></span>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="smsconfirmation_settings">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="" for="smsconfirmation_type">Notify me
                                                about last minute reservations for guests who book
                                                and are arriving within…</label>
                                            <select id="smsconfirmation_type"
                                                name="smsconfirmation_type" class="form-control "
                                                style="">
                                                <option value="2">24 hours</option>
                                                <option value="3">48 hours</option>
                                                <option value="4">72 hours</option>
                                                <option value="1">For all reservations</option>
                                            </select>
                                            <span class="help-block"></span>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Guest Message Notifications</legend>
                            <p>You can change the settings for guest message notifications on the
                                new <a
                                    href="{{ url("#") }}">Messaging
                                    Preferences page</a>.
                                </p>
                        </fieldset>

                        <fieldset>
                            <legend>Booking.com Notifications</legend>
                            <div class="form-group">
                                <label>Do you want to receive an email when Booking.com sends a
                                    message to your Extranet Inbox?

                                </label>
                                <div class="radio-block" id="receive_booking_notes">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="receive_booking_notes"
                                                value="yes">
                                            <span>Yes</span>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="receive_booking_notes"
                                                value="no" checked="">
                                            <span>No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <input type="submit" name="save" id="save" value="Save"  class="btn btn-primary btn-lg w-100">
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
<!-- /Main Content -->
@endsection