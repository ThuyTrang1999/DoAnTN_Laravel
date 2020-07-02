<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class ShopPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listPost = post::all();
        // echo $listPost;
        return view('shop.pages.index', compact('listPost'));

    }
}
