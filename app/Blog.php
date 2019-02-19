<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Blog extends Model
{
	/**
	 * [getImageAttribute description]
	 * @param  [type] $image [description]
	 * @return [type]        [description]
	 */
	public function getImageAttribute($image){
		return "blogs/".$image;
	}

	public function getCreatedAtAttribute($date){
		$rawDate = Carbon::createFromFormat('Y-m-d H:i:s', $date); //2017-12-31 18:34:56
		return $rawDate->diffForHumans().' | ' . $rawDate;
	}

	public function getText(){
		return str_limit($this->body, 200);
	}

}
