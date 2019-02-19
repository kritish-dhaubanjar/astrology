<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;

class PriceController extends Controller
{

	/**
	* Create a new controller instance.
	*
	* @return void
	*/
	public function __construct()
	{
	  $this->middleware('admin')->except('getPrices');
	}

	public static function update(Request $request, $id){
		$price = Price::findOrFail($id);
		$price->price = $request->price;
		$price->update();
		return Redirect('/')->with('success', 'Price updated successfully.');
	}

	public static function getPrices(){
		$prices = Price::all();
		return $prices;
	}
}
