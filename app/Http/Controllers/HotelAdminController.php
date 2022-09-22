<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NotificationSetting;

class HotelAdminController extends Controller
{
    public function storeNotificationSettings(Request $request)
    {
        $notificationSetting = NotificationSetting::first();
        $notificationSetting->get_email_notification = $request->get_email_notification;
        $notificationSetting->email_from_time = $request->email_from_time;
        $notificationSetting->email_to_time = $request->email_to_time;
        $notificationSetting->email = $request->email;
        
        $notificationSetting->get_sms_notification = $request->get_sms_notification;
        $notificationSetting->sms_from_time = $request->sms_from_time;
        $notificationSetting->sms_to_time = $request->sms_to_time;
        $notificationSetting->phone = $request->phone;

        $notificationSetting->get_other_notifications = 0;
        $notificationSetting->save();
        return redirect()->back()->with('notificationSetting',$notificationSetting);
    }
    public function notificationSettings()
    {
        $notificationSetting = !NotificationSetting::exists()?
            NotificationSetting::Create([
                'user_id'=>1,
                'email'=>'abc@example.com',
                'get_email_notification'=>1,
                'get_sms_notification'=>1,
                'get_other_notifications'=>1,
                'phone'=>'+880-1878-362896'
            ])
            : NotificationSetting::first();
        return view('hotel-admin.notification-settings')
            ->with('notificationSetting',$notificationSetting);
    }
}
