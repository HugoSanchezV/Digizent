<?php

namespace App\Http\Controllers;

use App\Models\Disk;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DiskController extends Controller
{
    //

    public function index()
    {
        $disks = Disk::with('artist')->get();
        return Inertia::render('Disk/Index', [
            'disks' => $disks
        ]);
    }

    public function show(Disk $disk)
    {
        $stores = $disk->stores->map(function ($store) {
            return [
                'id' => $store->id,
                'name' => $store->name,
                'stock' => $store->pivot->stock,
            ];
        });
        return Inertia::render('Disk/Show', [
            'stores' => $stores
        ]);
    }
}
