<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    public function disks()
    {
        return $this->belongsToMany(Disk::class, 'disk_store')->withPivot('stock') ;
    }
}
