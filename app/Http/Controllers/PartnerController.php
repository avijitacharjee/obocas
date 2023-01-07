<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Partner;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Booking;
use App\Models\User;
use Carbon\Carbon;
use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class PartnerController extends Controller
{
    public function home()
    {
        return view('partner.index');
    }
    public function signup()
    {
        return view('partner.signup');
    }
    public function store(StorePartnerRequest $request)
    {
        $user = new User();
        $user->name = $request->firstname . ' ' . $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 4;
        $user->save();

        $partner = new Partner();
        $partner->user_id = $user->id;
        $partner->fill($request->only(['firstname', 'lastname', 'email']));
        $partner->email_confirmed_at = now();
        $partner->tool_implemented_at = now();
        $partner->save();
        Auth::login($user);
        return redirect('partner/dashboard', 201);
    }
    public function dashboard(): View
    {
        $partner = auth()->user()->partner;
        $percentage = 30;
        if($partner->bookings->count()>0){
            $partner->booking_generated_at = now();
            $partner->save();
            $percentage = 50;
        }
        if($partner->profile_completed_at){
            $percentage += 20;
        }
        return view('partner.dashboard.dashboard')
            ->with('partner',$partner)
            ->with('percentage',$percentage);
    }
    public function signin(StorePartnerRequest $request)
    {
        $partner = User::where('email', $request->email)->first();
        if ($partner) {
            if (Hash::check($request->password, $partner->password)) {
                auth()->login($partner);
                return redirect('partner/dashboard', 201);
            } else {
                return back()->with('error', 'Invalid password');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid username');
        }
    }
    public function profile()
    {
        $partner = auth()->user()->partner;
        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
        return view('partner.dashboard.profile')
            ->with('partner', $partner)
            ->with('countries', $countries);
    }
    public function updateProfile(Request $request)
    {
        if($request->has('submitPass')){

        }
        $partner = auth()->user()->partner;
        $partner->fill($request->only([
            'firtname',
            'lastname',
            'dob',
            'phone',
            'company_name',
            'language',
            'is_subscriber',
        ]));
        $partner->profile_completed_at = now();
        $partner->save();
        $address = auth()->user()->address ?? (new Address(['user_id' => auth()->user()->id]));
        $address->fill($request->only([
            'address_type',
            'address1',
            'address2',
            'state',
            'city',
            'zip',
            'country'
        ]));
        $address->save();
        return back()->with('message', 'Successfully updated');
    }
    public function report()
    {
        $bookings = auth()->user()->partner->bookings;
        $bookingsThisMonth = Booking::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->where('partner_id', auth()->user()->partner->id)
            ->count();
        $bookingsToday = Booking::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->whereDay('created_at',Carbon::now()->day)
            ->where('partner_id', auth()->user()->partner->id)
            ->count();

        return view('partner.dashboard.report')
            ->with('bookings', $bookings)
            ->with('bookingsThisMonth', $bookingsThisMonth)
            ->with('bookingsToday',$bookingsToday);
    }
}
