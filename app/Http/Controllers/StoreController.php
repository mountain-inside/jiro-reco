<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    //
    public function tops(Store $store)
    {
        return view('stores.tops')->with(['reviews' => $store->getByStore()]);
    }
    
    Public function index(Store $store)
    {
        return view('stores.index')->with(['stores' =>$store->get()]);
    }
}
