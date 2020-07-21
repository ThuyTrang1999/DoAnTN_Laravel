<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listUsers = User::paginate(3);
        return view('admin.pages.user.list-user',['listUsers'=>$listUsers]);
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
        $this->validate($request, [
            'user_name'=>'bail|required|unique:users|min:3|max:50',
            'password' => 'bail|required|min:6',
            'repassword' =>'bail|required|same:password',
            'email' => 'required|email|unique:users,email',
            'phone' => 'bail|required',
            'first_name' => 'bail|required',
            'last_name' => 'bail|required',
            'address' => 'bail|required',
        ], [
            'user_name.required' => 'Tài khoản không được để trống.',
            'user_name.unique' => 'Tài khoản đã có trong danh sách.',
            'user_name.max'=>':attribute Không được quá :max ký tự',
            'password.required' => 'Mật khẩu không được để trống.',
            'password.min' => 'Mật khẩu tối thiểu là 6 ký tự.',
            'repassword.required' => 'Mật khẩu không được để trống.',
            'repassword.same' => 'Mật khẩu không trùng.',
            'email.required' => 'Email không được để trống.',
            'email.unique' => 'Email đã tồn tại.',
            'email.email' => 'Email chưa đúng định dạng.',
            'phone.required' => 'Số điện thoại không được để trống.',
            'first_name.required' => 'Tên không được để trống.',
            'last_name.required' => 'Họ không được để trống.',
            'address.required' => 'Họ không được để trống.',
            
        ]);
         $addUser = new User;
         $addUser->user_name = $request->user_name;
         $addUser->password = md5($request->password);
         $addUser->first_name = $request->first_name;
         $addUser->last_name = $request->last_name;
         $addUser->email = $request->email;
         $addUser->phone = $request->phone;
         $addUser->address = $request->address;
         $addUser->num_order = "1";
         $addUser->gender = $request->gender;
         $addUser->birthday = $request->birthday;
         $addUser->role = $request->role;
         $addUser->status = $request->status;
         if($request->hasFile('Hinh'))
         {
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png'&& $duoi != 'jpeg')
            {
                return redirect()->route('user.listUser')->with('Loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg ');
            }
            $name = $file->getClientOriginalName();
            $Hinh = Str::random(4)."_".$name;
           
            echo $Hinh;
            while(file_exists("upload/avatar/".$Hinh))
            {
                $Hinh = Str::random(4)."_".$name;
            }
            $file->move("upload/avatar",$Hinh);
            $addUser->avatar = $Hinh;
        }
        else
        {
            $addUser->avatar = "";
        }
         $addUser->save();
         return redirect()->route('user.listUser')->with('thongbao','Thêm thành công ');
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
         $addUser->password = md5($request->password);
         $addUser->first_name = $request->first_name;
         $addUser->last_name = $request->last_name;
         $addUser->email = $request->email;
         $addUser->phone = $request->phone;
         $addUser->address = $request->address;
         $addUser->num_order = "1";
         $addUser->gender = $request->gender;
         $addUser->birthday = $request->birthday;
         $addUser->role = $request->role;
         $addUser->status = $request->status;
         if($request->hasFile('Hinh'))
         {
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png'&& $duoi != 'jpeg')
            {
                return redirect()->route('user.listUser')->with('Lỗi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg ');
            }
            $name = $file->getClientOriginalName();
            $Hinh = Str::random(4)."_".$name;
           
            echo $Hinh;
            while(file_exists("upload/avatar/".$Hinh))
            {
                $Hinh = Str::random(4)."_".$name;
            }
            $file->move("upload/avatar",$Hinh);
            $addUser->avatar = $Hinh;
        }
        else
        {
            $addUser->avatar = "";
        }
         $addUser->save();
         return redirect()->route('user.listUser')->with(['Thông báo' => 'Cập nhật thành công ']);
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
