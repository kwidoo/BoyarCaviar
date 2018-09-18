<?php

namespace Kwidoo\BoyarCaviar\Models;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{

    protected $fillable = [
    	'number', 'status'  
    ];

    public function address(){

    	return $this->belongsTo('\Kwidoo\BoyarCaviar\Models\Address');
    }
}
