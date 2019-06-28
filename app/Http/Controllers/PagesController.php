<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    public function newtruckrequest()
    {
        return view('pages.newtruckrequest');
    }

    public function ridermanagement()
    {
        return view('pages/riders/ridermanagement');
    }

    public function addrider()
    {
        return view('pages/riders/addrider');
    }

    public function alldrivers()
    {
        return view('pages/drivers/alldrivers');
    }

    public function createdriver()
    {
        return view('pages/drivers/createdriver');
    }

    public function approved()
    {
        return view('pages/drivers/approved');
    }
    public function pendingapproval()
    {
        return view('pages/drivers/pendingapproval');
    }

    public function rejected()
    {
        return view('pages/drivers/rejected'); 
    }

    public function corporate()
    {
        return view('pages/corporate/corporate'); 
    }

    public function createcorporate()
    {
        return view('pages/corporate/createcorporate'); 
    }

    public function earnings()
    {
        return view('pages.earnings');
    }

    public function activerides()
    {
        return view('pages/ridesmanagement/activerides');
    }

    public function canceledrides()
    {
        return view('pages/ridesmanagement/canceledrides');
    }

    public function notifications()
    {
        return view('pages/others/notifications');
    }

    public function createnotification()
    {
        return view('pages/others/createnotification');
    }

    public function cmspages()
    {
        return view('pages/others/cmspages');
    }

    public function createcmspage()
    {
        return view('pages/others/createcmspage');
    }


    public function rejectreasons()
    {
        return view('pages/others/rejectreasons');
    }

    public function cancelreasons()
    {
        return view('pages/others/cancelreasons');
    }
    

    public function tandc()
    {
        return view('pages/others/t$c');
    }

    public function customersupport()
    {
        return view('pages/others/customersupport');
    }

    public function sosnumber()
    {
        return view('pages/SOS/sosnumber');
    }

    public function sosrequest()
    {
        return view('pages/SOS/sosrequest');
    }

    public function general()
    {
        return view('pages/configurations/general');
    }

    public function applications()
    {
        return view('pages/configurations/applications');
    }

    public function bookings()
    {
        return view('pages/configurations/bookings');
    }

    public function driverconfigurations()
    {
        return view('pages/configurations/driverconfigurations');
    }
    public function doccuments()
    {
        return view('pages/settings/doccuments');
    }

    public function settingsApplication()
    {
        return view('pages/settings/applications');
    }

    public function oneSignal()
    {
        return view('pages/settings/one-signal');
    }

    public function emailConfigurations()
    {
        return view('pages/settings/email-configurations');
    }

    public function serviceTypes()
    {
        return view('pages/settings/serviceTypes');
    }

    public function pricingParameters()
    {
        return view('pages/settings/pricing-parameter');
    }

    public function navigationDrawer()
    {
        return view('pages/settings/navigation-drawer');
    }
    

    public function subAdmin()
    {
        return view('pages/permissions/sub-admin');
    }

    public function createAdmin()
    {
        return view('pages/permissions/create-admin');
    }

    public function role()
    {
        return view('pages/permissions/role');
    }

    public function createRole()
    {
        return view('pages/permissions/create-role');
    }
    
    public function appTheme()
    {
        return view('pages/app-theme');
    }

    public function heatMap()
    {
        return view('pages/maps/heat-map');
    }

    public function driverMap()
    {
        return view('pages/maps/driver-map');
    }
    
    public function bookingTime()
    {
        return view('pages/reports/booking-time');
    }

    public function driverReport()
    {
        return view('pages/reports/driver-report');
    }

    public function driverChart()
    {
        return view('pages/reports/driver-chart');
    }

    public function driverOnline()
    {
        return view('pages/reports/driver-online');
    }

    public function rideAcceptance()
    {
        return view('pages/reports/ride-acceptance');
    }

    public function referal()
    {
        return view('pages/reports/referal');
    }

    public function driverWallet()
    {
        return view('pages/reports/driver-wallet');
    }

    public function bookingVarriance()
    {
        return view('pages/reports/booking-varriance');
    }

    public function riderWallet()
    {
        return view('pages/reports/rider-wallet');
    }
    
    public function transactions()
    {
        return view('pages/transactions');
    }

    public function userSystem()
    {
        return view('pages/refferal-system/user-system');
    }

    public function userCreate()
    {
        return view('pages/refferal-system/create-user');
    }

    public function driverSystem()
    {
        return view('pages/refferal-system/driver-system');
    }

    public function driverCreate()
    {
        return view('pages/refferal-system/create-driver');
    }

    public function promo()
    {
        return view('pages/promotion/promo');
    }

    public function createPromo()
    {
        return view('pages/promotion/create-promo');
    }

    public function priceCard()
    {
        return view('pages/pricecards/price-card');
    }

    public function createCard()
    {
        return view('pages/pricecards/create-card');
    }

    public function rentalPackages()
    {
        return view('pages/packages/rental-packages');
    }

    public function type()
    {
        return view('pages/vehicle-management/type');
    }

    public function model()
    {
        return view('pages/vehicle-management/model');
    }

    public function make()
    {
        return view('pages/vehicle-management/make');
    }

    public function country()
    {
        return view('pages/area-management/country');
    }

    public function createCountry()
    {
        return view('pages/area-management/create-country');
    }

    public function service()
    {
        return view('pages/area-management/service');
    }

    public function createService()
    {
        return view('pages/area-management/create-service');
    }

    public function driverAccount()
    {
        return view('pages.driver-account');
    }

    public function allVehicles()
    {
        return view('pages/driver-vehicles/all-vehicles');
    }

    public function pending()
    {
        return view('pages/driver-vehicles/pending');
    }
}
