<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\produce;
use App\img;

class ShopProductController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listProduces = DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->get();
        // echo $listProduces;
        return view('shop.pages.product_shop.list-product-shop', compact('listProduces'));

    }
    public function create()
    {
        return view('shop.pages.product_shop.add-product-shop');
    }
}
