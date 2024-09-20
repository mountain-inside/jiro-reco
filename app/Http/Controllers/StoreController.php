<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Soup;
use App\Models\Noodle;
use Cloudinary;

class StoreController extends Controller
{
    //
    public function tops(Store $store)
    {
        return view('stores.tops')->with(['reviews' => $store->getByStore()]);
    }
    
    public function index(Store $store, Soup $soup, Noodle $noodle)
    {
        return view('stores.index')->with(['stores' => $store->getPagiByLimit(), 'soups' => $soup->get(), 'noodles' => $noodle->get()]);
    }
    
    public function jiro(Store $store)
    {
        return view('stores.jiro')->with(['store' => $store]);
    }
}
