<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiskStore extends Model
{
    use HasFactory;

    protected $table = 'disk_store';

    protected $fillable = [
        'disk_id',
        'store_id',
        'stock',
    ];

    public function disk()
    {
        return $this->belongsTo(Disk::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
