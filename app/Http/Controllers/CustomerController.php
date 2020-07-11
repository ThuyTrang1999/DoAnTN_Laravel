<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCustomer = customer::all();
        // echo $listCustomer;
        return view('admin.pages.customer.list-customer', compact('listCustomer'));

    }
    public function create()
    {
        $dataCustomer = customer::all();
        return view('client.index', compact('dataCustomer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
       
        $customers = new customer();
        $customers->name = $request->shop_name;
        $customers->pass = $request->id_user;
        $customers->gander = $request->bannerFile->getClientOriginalName();
        $customers->address =  $request->desc;
        $customers->phone = $request->logoFile->getClientOriginalName();
        $email=$request->file('logoFile');
        $customers->status ="1";
        $customers->save();
        return redirect()->route('customers.listcustomers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

}
