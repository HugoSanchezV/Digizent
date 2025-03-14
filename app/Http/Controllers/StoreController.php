<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StoreController extends Controller
{
    //
    public function index() {
        $store = Store::all();
        return Inertia::render('Store/Index', [
            'stores' => $store
        ]);  
    }

    public function show(Store $store) {
        $disks = $store->disks()->with('artist')->get()->map(function ($disk) {
            return [
                'id' => $disk->id,
                'name' => $disk->name, 
                'artist' => $disk->artist, 
                'price' => $disk->price, 
                'stock' => $disk->pivot->stock, 
            ];
        });

        return Inertia::render('Store/Show', [
            'store' => $store,
            'disks' => $disks
        ]);   
    }
}
