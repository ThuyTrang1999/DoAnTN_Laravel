<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\category;
use App\sub_category;
use App\produce;
use App\img;


class PagesController extends Controller
{
    function index(){
        $listProduces = DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->get();
        $Category=category::all();
        $SCategorys=sub_category::all();
        $prouctTop=DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->where('top','>=','21')->get();
        $Hot_KM=DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->whereColumn('price', '>','discout_price')->get();
        $prouctSum= DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->where('produces.id','<=','13')->get();
        // echo $listProduces;
        // echo $prouctSum;
        return view('client.pages.index', compact('Category','listProduces','SCategorys','prouctTop','Hot_KM', 'prouctSum'));       
    }
}
