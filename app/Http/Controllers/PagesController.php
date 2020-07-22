<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\category;
use App\produce;
use App\img;
use App\vendor;
use App\Cart;
use Session;
session_start();
class PagesController extends Controller
{
    public function index(){
     
        $listProduces = DB::table('produces')
        ->join('imgs', 'produces.id', '=', 'imgs.produce_id')
        ->get();
        $Category=category::all();
        // san pham noi bac
        $prouctTop=DB::table('produces')
        ->join('imgs', 'produces.id', '=', 'imgs.produce_id')
        ->where('top','>=','11')->get();
        // san pham uu dai
        $Hot_KM=DB::table('produces')
        ->join('imgs', 'produces.id', '=', 'imgs.produce_id')
        ->whereColumn('price', '>','discout_price')->get();
      
        // San pham mua nhieu nhat
        $MostProduct=DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->where('top','>=','50')->get();

        // phone
        $phoneProduct=DB::table('produces')
        ->join('imgs', 'produces.id', '=', 'imgs.produce_id')
        ->where('produces.category_id','=','1')->get();
        // laptop
        $laptopProduct=DB::table('produces')
        ->join('imgs', 'produces.id', '=', 'imgs.produce_id')
        ->where('produces.category_id','=','2')->get();
        // o'clock
        $oClockProduct=DB::table('produces')
        ->join('imgs', 'produces.id', '=', 'imgs.produce_id')
        ->where('produces.category_id','=','3')->get();

        // phu kien
        $accesProduct=DB::table('produces')
        ->join('imgs', 'produces.id', '=', 'imgs.produce_id')
        ->where('produces.category_id','=','4')->get();

        return view('client.pages.index', compact('Category','listProduces','prouctTop','Hot_KM', 'phoneProduct','laptopProduct','oClockProduct', 'accesProduct', 'MostProduct'));       
    }

    public function dangNhap(){
        return view('client.pages.login');
    }

    /*GIO HANG*/

    // add cart
    public function AddCart(Request $request){

        $product=DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->where('produces.id', $request->id)->first();
        // dd($product);
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null; 
            $newCart = new Cart($oldCart);
            $newCart->AddCart( $product, $request->id);
            Session()->put('Cart', $newCart);
            // dd(Session('Cart'));
           
        }
        // dd($newCart);
        
        return view('client.pages.cart',compact('newCart'));
      
    }

    // update cart
    public function UpdateCart(Request $request){

    }

    // delete cart
    public function DaleteCart(Request $request){

    }
    

    // Tìm kiếm
    public function getSearch(Request $req)
    {
        $listProduces = DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')
        ->where('produces.name', 'like','%'.$req->key_word.'%')->get();
        return view('client.pages.list-product', compact('listProduces'));
    }

    // kết quả tìm kiếm
    public function getSearchResult(Request $req)
    {
        $listSearchResult = DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->join('categories', 'produces.category_id', '=', 'categories.id')
        ->where('produces.name', 'like','%'.$req->key.'%')
        ->orWhere('produces.price', $req->key)
        // ->orWhere('categories.name', $req->key)
        ->orderBy('produces.id')->paginate(12);
        return view('client.pages.searchResult', compact('listSearchResult'));
    }





}