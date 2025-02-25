<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    protected $fillable = ['name', 'type', 'year'];

    public function disks()
    {
        return $this->hasMany(Disk::class);
    }
}
