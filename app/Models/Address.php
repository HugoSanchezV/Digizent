<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $fillable = [
        'model_id',
        'addressable',
        'state',
        'country',
        'postal_code',
    ];

    public function addressable() {
        return $this->morphTo();
    }
}
