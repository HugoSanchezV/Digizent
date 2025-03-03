<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disk extends Model
{
    //
    use HasFactory;
    protected $fillable = ['name', 'artist_id', 'icon', 'price', 'stock'];


    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
