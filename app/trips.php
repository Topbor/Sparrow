<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trips extends Model
{
    public function getTour(){
      return Tour::find($this->tour_id);   
    }
    public function tour(){
        return $this->belongsTo(trips::class);
    }
    public function getGuide(){
      $guide=worker::where('id', $this->guide_id)->first();
      return $guide;
    }

}
