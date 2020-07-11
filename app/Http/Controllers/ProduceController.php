<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\category;
use App\img;
use App\user;
use App\produce;
use App\post;
class ProduceController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listProduce = DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->get();
        
        return view('admin.pages.product.list-product', compact('listProduce'));
    }
    public function select()
    {
        $listProduces = DB::table('produces')->join('imgs', 'produces.id', '=', 'imgs.produce_id')->get();
        // echo $listProduces;
        return view('client.pages.list-product', compact('listProduces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        // $listProducts= produce::all();
        $listcategory=category::all();
        $listUser =user::all();
        //$listImg = img::all();
        return view('admin.pages.product.add-product', compact('listcategory','listUser'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        $listProduce = new produce ;
        $listImg = new img ; 

        $this->validate($request, 
			[
				//Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
				'imgFile' => 'mimes:jpg,jpeg,png,gif|max:2048',
			],			
			[
				//Tùy chỉnh hiển thị thông báo không thõa điều kiện
				'imgFile.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
				'imgFile.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
			]
        );
        $get_product = $request->file('imgFile');
        if ($get_product->isValid()) {

           
        
        $imageName = time().'.'.$request->file('imgFile')->getClientOriginalExtension();

        $request->imgFile->move('upload', $imageName);

        $listProduce->name = $request->name;
        $listProduce->unit = $request->unit;
        $listProduce->SKU = $request->SKU;
        $listProduce->desc = $request->desc;
        $listProduce->short_desc = $request->shortdesc;
        $listProduce->category_id = $request->category_id;
        $listProduce->author_id = $request->author_id;
        $listProduce->price = $request->price;
        $listProduce->discout_price = $request->discout_price;
        $listProduce->status = $request->status;
        $listProduce->top ="0";
        $listProduce->save();




        $listImg ->url = 'upload/' . $imageName;
        $listImg->status = $request->status;
        $listImg->style = '1';
        $listImg->produce_id= $listProduce->id;
        $listImg->user_id= $request->author_id;
        $listImg->post_id='1';
        
        $listImg ->save();
        return redirect()->route('product.listProduct');
        }
        else 
        {
            return alert('THêm Không thành công ');
        }
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
        // $linhVuc = LinhVuc::find($id);
        // return view('linh-vuc.form', compact('linhVuc'));
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
        // $linhVuc = LinhVuc::find($id);
        // $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
        // $linhVuc->save();
        // return redirect()->route('linh-vuc.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $linhVuc = LinhVuc::find($id);
        // $linhVuc->delete();
        // return redirect()->route('linh-vuc.danh-sach');
    }

    // show detail
    public function detail(Request $req){
        $sanpham=produce::where('id',$req->id)->first();
        return view('client.pages.detail', compact('sanpham'));
    }
 
}
