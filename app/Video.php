<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Video extends Model
{
   public function getThumbnailAttribute($imageName){
   	return "thumbnails/".$imageName;
   }

	public function getSrcAttribute($src){
   	// return $src."?autoplay=1";
      return $src;
   }

   public function getCreatedAtAttribute($date){
   	 return Carbon::createFromFormat('Y-m-d H:i:s', $date)->diffForHumans();
   }

   public function getTextAttribute($text){
      return $text;
   }

   public function getText(){
      return str_limit($this->text, 150);
   }
}
