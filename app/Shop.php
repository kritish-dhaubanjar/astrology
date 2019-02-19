<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Shop extends Model
{

	public function getUpdatedAtAttribute($date){
		$rawDate = Carbon::createFromFormat('Y-m-d H:i:s', $date);
		return $rawDate->diffForHumans().' | ' . $rawDate;
	}

	public function getImageAttribute($image){
		return 'shop/'.$image;
	}

}
