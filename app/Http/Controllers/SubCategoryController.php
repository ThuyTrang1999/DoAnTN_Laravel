<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sub_category;
use App\category;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listsubCategorys = sub_category::all();
        
        return view('admin.pages.sub_category.list-sub_category', compact('listsubCategorys'));

    }

    public function create()
    {
        $listcategory=category::all();
       
        return view('admin.pages.sub_category.add-sub_category', compact('listcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $listSub= new sub_category;
        $listSub->sub_name = $request->sub_name;
        $listSub->alilas = $request->alilas;
        $listSub->parent_id = $request->parent_id;
        $listSub->status = $request->status;
        $listSub->save();
        return redirect()->route('sub_category.listSubCategory');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addSubCategory= sub_category::find($id);
        $listcategory=category::find($id);
        return view('admin.pages.sub_category.add-sub_category ', compact('addSubCategory','listcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subCategory = sub_category::find($id);
        $subCategory->sub_name = $request->sub_name;
        $subCategory->alilas = $request->alilas;
        $subCategory->parent_id = $request->category;
        $subCategory->status = $request->status;
        $subCategory->save();
        return redirect()->route('sub_category.listSubCategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subCategory = sub_category::find($id);
        $subCategory->delete();
        return redirect()->route('sub_category.listSubCategory');
    }
}
