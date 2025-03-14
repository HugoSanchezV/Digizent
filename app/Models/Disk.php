<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disk extends Model
{
    //
    use HasFactory;
    protected $fillable = ['name', 'artist_id', 'icon', 'price', 'store_id'];


    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function stores()
    {
        return $this->belongsToMany(Store::class, 'disk_store')->withPivot('stock');
    }
}
