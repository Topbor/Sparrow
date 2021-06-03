<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    public function getAll(){
        $all=$this->get();
        return $all;
      }
}
