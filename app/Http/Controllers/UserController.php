<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listUsers = User::all();
        //$listLinhVuc = LinhVuc::all();
        return view('admin.pages.user.list-user', compact('listUsers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.user.add-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $addUser = new User;
         $addUser->user_name = $request->user_name;
         $addUser->password = $request->password;
         $addUser->first_name = $request->first_name;
         $addUser->last_name = $request->last_name;
         $get_img_avt = $request->file('avatarFile');
         $addUser->email = $request->email;
         $addUser->phone = $request->phone;
         $addUser->address = $request->address;
         $addUser->num_order = "1";
         $addUser->gender = $request->gender;
         $addUser->birthday = $request->birthday;
         $addUser->role = $request->role;
         $addUser->status = $request->status;
         if($get_img_avt){
            $new_img_avt = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." .$request->avatarFile->getClientOriginalName();
            $get_img_avt->move('upload/avatar',$new_img_avt);
            $addUser->avatar = $new_img_avt;
            $addUser->save();
        }
        
         

         $addUser->save();
         return redirect()->route('user.listUser')->with(['flash_message' => 'Thêm User thành công ']);
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
         $addUser = User::find($id);
         return view('admin.pages.user.add-user', compact('addUser'));
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
         $addUser = User::find($id);
         $addUser->user_name = $request->user_name;
         $addUser->password = $request->password;
         $addUser->first_name = $request->first_name;
         $addUser->last_name = $request->last_name;
         $set_img_avt=$request->file('avatarFile');
         if(set_img_avt){
            $new_img_avt=time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." .$request->avatarFile->getClientOriginalName();
            $set_img_avt->move('upload/avatar', $new_img_avt);
            $addUser->avatar = $new_img_avt;
            $addUser->save();
        }
         $addUser->email = $request->email;
         $addUser->phone = $request->phone;
         $addUser->address = $request->address;
         $addUser->num_order = "0";
         $addUser->gender = $request->gender;
         $addUser->birthday = $request->birthday;
         $addUser->role = $request->role;
         $addUser->status = $request->status;
         

         $addUser->save();
         return redirect()->route('user.listUser')->with(['flash_message' => 'Cập nhật User thành công ']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $addUser = User::find($id);
         $addUser->delete();
         return redirect()->route('user.listUser');
    }

    public function dangNhap(){
        
        return view('client.pages.login');
    }
    public function xuLyDangNhap(Request $request){
        
        $user_name = $request->user_name;
        $password = $request->mat_khau;

        // $this->validate($request, [ 
        //     'user_name' => 'required|max:255|min:5',
        //     'mat_khau' => 'required|max:20|min:4',
            
        // ], [
        //     'user_name.required' => 'Bạn chưa nhập tên đăng nhập',          
        //     'mat_khau.required' => 'Bạn chưa nhập mật khẩu.',
        //     'mat_khau.min' => 'Mật khẩu phải lớn hơn 4 kí tự.',
        //     'mat_khau.max' => 'Mật khẩu phải nhỏ hơn 20 kí tự.',
            
        // ]);

           
        if (Auth::attempt(['user_name'=>$user_name , 'password'=>$password])) {
            return redirect()->route('admin.index'); 
            // return "Thành công";
            }else{
                return view('client.pages.login');
            }
         
            
            // else {
            // // return redirect('dang-nhap')->with('thongbao', 'Sai tên đăng nhập hoặc mật khẩu');
            // return "Thất bại";
            // return $mat_khau;
    }
    public function layThongTin(){
        return Auth::id();
    }
    public function dangXuat(){
        Auth::logout();
        return redirect()->route('dang-nhap');
        // return view('client.pages.login');  
    }
}
