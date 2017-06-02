<?php

namespace Agenda;

use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{	
    public function person() {
    	return $this->belongsTo('Agenda\Person');
    }
}
