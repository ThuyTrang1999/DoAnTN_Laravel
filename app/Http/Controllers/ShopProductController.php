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
        $listProducesCategory = DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->where('category_id','=','1')->get();
        //  echo $listProducesCategory;
        return view('shop.pages.product_shop.list-product-shop', compact('listProducesCategory'));

    }
    public function create()
    {
        return view('shop.pages.product_shop.add-product-shop');
    }
}
