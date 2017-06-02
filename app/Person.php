<?php

namespace Agenda;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function sheets() {
    	return $this->hasMany('Agenda\Sheet');
    }
}
