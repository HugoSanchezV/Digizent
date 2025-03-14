<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $fillable = [
        'city',
        'state',
        'country',
        'postal_code',
        'addressable_id',
        'addressable_type',
    ];

    public function addressable() {
        return $this->morphTo();
    }
}
