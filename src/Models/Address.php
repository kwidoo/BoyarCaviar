<?php

namespace Kwidoo\BoyarCaviar\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'phone', 'shipping', 'billing'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function invoice(){
        return $this->hasMany('\Kwidoo\BoyarCaviar\Models\Invoices');
    }

}

