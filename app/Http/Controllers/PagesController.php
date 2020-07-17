<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\category;
use App\produce;
use App\img;
use App\vendor;


class PagesController extends Controller
{
    public function index(){
        $listProduces = DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->get();
        $Category=category::all();
        // san pham noi bac
        $prouctTop=DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->where('top','>=','21')->get();
        // san pham uu dai
        $Hot_KM=DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->whereColumn('price', '>','discout_price')->get();
      
        // phone
        $phoneProduct=DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->where('produces.category_id','=','1')->get();
        // laptop
        $laptopProduct=DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->where('produces.category_id','=','2')->get();
        // o'clock
        $oClockProduct=DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->where('produces.category_id','=','3')->get();

        // echo $phoneLaptop;
        // echo $prouctSum;
        return view('client.pages.index', compact('Category','listProduces','prouctTop','Hot_KM', 'phoneProduct','laptopProduct','oClockProduct'));       
    }

    public function dangNhap(){
        return view('client.pages.login');
    }



}
