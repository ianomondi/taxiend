<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/* Route::group([
    'prefix'=>'admin/dashboard'
], function(){
    Route::get('/', 'PagesController@index');
    Route::get('newtruckrequest', 'PagesController@newtruckrequest');
    Route::get('ridermanagement', 'PagesController@ridermanagement');
}); */
 Route::get('/', 'PagesController@index');
Route::get('/newtruckrequest', 'PagesController@newtruckrequest');
Route::get('/ridermanagement', 'PagesController@ridermanagement');
Route::get('/ridermanagement/addrider', 'PagesController@addrider');  
Route::get('/drivers/alldrivers', 'PagesController@alldrivers'); 
Route::get('/drivers/alldrivers/createdriver', 'PagesController@createdriver');
Route::get('/drivers/alldrivers/approved', 'PagesController@approved');
Route::get('/drivers/alldrivers/pendingapproval', 'PagesController@pendingapproval');
Route::get('/drivers/alldrivers/rejected', 'PagesController@rejected'); 
Route::get('/corporate', 'PagesController@corporate'); 
Route::get('/corporate/createcorporate', 'PagesController@createcorporate'); 
Route::get('/earnings', 'PagesController@earnings');
Route::get('/ridesmanagement/activerides', 'PagesController@activerides');
Route::get('/ridesmanagement/canceledrides', 'PagesController@canceledrides');
Route::get('/others/notifications', 'PagesController@notifications');
Route::get('/others/notifications/createnotification', 'PagesController@createnotification');
Route::get('/others/cmspages', 'PagesController@cmspages');
Route::get('/others/cmspages/createcmspage', 'PagesController@createcmspage');
Route::get('/others/rejectreasons', 'PagesController@rejectreasons');
Route::get('/others/cancelreasons', 'PagesController@cancelreasons');
Route::get('/others/t$c', 'PagesController@tandc');
Route::get('/others/customersupport', 'PagesController@customersupport');
Route::get('/SOS/sosnumber', 'PagesController@sosnumber');
Route::get('/SOS/sosrequest', 'PagesController@sosrequest');
Route::get('/configurations/general', 'PagesController@general');
Route::get('/configurations/applications', 'PagesController@applications');
Route::get('/configurations/bookings', 'PagesController@bookings');
Route::get('/configurations/driverconfigurations', 'PagesController@driverconfigurations');
Route::get('/settings/doccuments', 'PagesController@doccuments');
Route::get('/settings/applications', 'PagesController@settingsApplication');
Route::get('/settings/one-signal', 'PagesController@oneSignal');
Route::get('/settings/email-configurations', 'PagesController@emailConfigurations');
Route::get('/settings/service-types', 'PagesController@serviceTypes');
Route::get('/settings/pricing-parameter', 'PagesController@pricingParameters');
Route::get('/settings/navigation-drawer', 'PagesController@navigationDrawer');
Route::get('/permissions/sub-admin', 'PagesController@subAdmin');
Route::get('/permissions/sub-admin/create-admin', 'PagesController@createAdmin');
Route::get('/permissions/role', 'PagesController@role');
Route::get('/permissions/role/create-role', 'PagesController@createRole');
Route::get('/app-theme', 'PagesController@appTheme');
Route::get('/maps/heat-map', 'PagesController@heatMap');
Route::get('/maps/driver-map', 'PagesController@driverMap');
Route::get('/reports/booking-time', 'PagesController@bookingTime');
Route::get('/reports/booking-varriance', 'PagesController@bookingVarriance');
Route::get('/reports/driver-chart', 'PagesController@driverChart');
Route::get('/reports/driver-online', 'PagesController@driverOnline');
Route::get('/reports/driver-wallet', 'PagesController@driverWallet');
Route::get('/reports/referal', 'PagesController@referal');
Route::get('/reports/ride-acceptance', 'PagesController@rideAcceptance');
Route::get('/reports/rider-wallet', 'PagesController@riderWallet');
Route::get('/transactions', 'PagesController@transactions');
Route::get('/refferal-system/user-system', 'PagesController@userSystem');
Route::get('/refferal-system/user-system/create-user', 'PagesController@userCreate');
Route::get('/refferal-system/driver-system', 'PagesController@driverSystem');
Route::get('/refferal-system/driver-system/create-driver', 'PagesController@driverCreate');
Route::get('/promotion/promo', 'PagesController@promo');
Route::get('/promotion/promo/create-promo', 'PagesController@createPromo');
Route::get('/pricecards/price-card', 'PagesController@priceCard');
Route::get('/pricecards/price-card/create-card', 'PagesController@createCard');
Route::get('/packages/rental-packages', 'PagesController@rentalPackages');
Route::get('/vehicle-management/type', 'PagesController@type');
Route::get('/vehicle-management/model', 'PagesController@model');
Route::get('/vehicle-management/make', 'PagesController@make');
Route::get('/area-management/country', 'PagesController@country');
Route::get('/area-management/country/create-country', 'PagesController@createCountry');
Route::get('/area-management/service', 'PagesController@service');
Route::get('/area-management/service/create-service', 'PagesController@createService');
Route::get('/driver-account', 'PagesController@driverAccount');
Route::get('/driver-vehicles/all-vehicles', 'PagesController@allVehicles');
Route::get('/driver-vehicles/pending', 'PagesController@pending');
