<?php

use App\Http\Controllers\PriceController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$prices = App\Http\Controllers\PriceController::getPrices();
	return view('welcome')->with('prices', $prices);
})->name('home');


Route::get('/about', function(){
	$url = URL::route('home').'#about';
	return Redirect::to($url);
})->name('about');


Route::get('/services', function(){
	$url = URL::route('home').'#services';
	return Redirect::to($url);
})->name('services');


Route::resource('/videos','VideoController');


Route::resource('/blog','BlogController');


Auth::routes();


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Route::resource('/shop', 'ShopController');


Route::post('/appointment', 'AppointmentController@store')->name('appointment.store');
Route::get('/appointment', 'AppointmentController@index')->name('appointment.index');
Route::post('/appointment/{id}', 'AppointmentController@check')->name('appointment.check');

Route::get('/services/horoscopes', function(){ return view('services.horoscopes');})->name('horoscopes');
Route::get('/services/gemstone', function(){	return view('services.gemstone');})->name('gemstone');
Route::get('/services/birthjournal', function(){ return view('services.birthjournal');})->name('birthjournal');
Route::get('/services/vastushastra', function(){return view('services.vastushastra');})->name('vastushastra');




Route::middleware(['auth'])->group(function () {
	Route::post('/prices/{id}/update', function(Request $request, $id){
		PriceController::update($request, $id);
		return Redirect('/');
	});
});
/*
Route::get('/mail', function(){
	$data = [
            'name' => 'Lorem Ipsum',
            'email' => 'johndoe@example.com',
            'service' => 'Notification',
            'msg' => 'no-reply',
        ];

        Mail::send('email.appointment', $data, function($message){
            $message->to('info@tantrajyotish.com', 'no-reply')->subject('Appointment Notification Test');
        });
});
*/
