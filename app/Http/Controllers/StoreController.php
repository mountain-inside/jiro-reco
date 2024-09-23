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
    
    public function search(Store $store, Request $request, Soup $soup, Noodle $noodle)
    {
        $request_soup = $request->input('soup');
        $request_noodle = $request->input('noodle');
        $request->session()->put('request_soup', $request_soup);
        $request->session()->put('request_noodle', $request_noodle);
        $query = $store->newQuery();
        
        if(!empty($request_soup)) {
            $query->where('soup_id', '=', $request_soup);
        }

        if(!empty($request_noodle)) {
            $query->where('noodle_id', '=', $request_noodle);
        }
        
        $stores=$query->paginate(5);
        return view('stores.index')->with(['stores' => $stores, 'soups' => $soup->get(), 'noodles' => $noodle->get()]);
    }
    
    public function paginate(Store $store, Request $request, Soup $soup, Noodle $noodle)
    {
        // セッションから検索条件を取得
        $request_soup = $request->session()->get('request_soup');
        $request_noodle = $request->session()->get('request_noodle');

        // 条件分岐を行い、ページネーションを適用
        $query = $store->newQuery();
        
        if(!empty($request_soup)) {
            $query->where('soup_id', '=', $request_soup);
        }

        if(!empty($request_noodle)) {
            $query->where('noodle_id', '=', $request_noodle);
        }
        
        $stores=$query->paginate(5);

        // 結果を返す
        return view('stores.index', ['stores' => $stores, 'soups' => $soup->get(), 'noodles' => $noodle->get()]);
    }
}
