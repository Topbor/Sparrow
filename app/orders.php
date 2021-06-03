<?php

namespace App;

use App\trips;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    public function getTrip(){
        $trip=trips::where('id', $this->trip_id)->first();
        return $trip;
      }
}
