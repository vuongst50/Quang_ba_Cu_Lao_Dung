<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    // Quản lý bài viết

    public function post_page(){
        $user=Auth()->user();
        return view("admin.post_page", compact("user"));
    }

    public function add_location_page(){
        $user=Auth()->user();
        return view("admin.add_location_page", compact("user"));
    }

    public function add_post(Request $request){

        $user=Auth()->user();

        $userid=$user->id;
        $name = $user->name;
        $usertype= $user->usertype;



        $post = new Post;

        $post->title = $request->title;

        $post->post_type = $request->post_type;

        $post->post_status = 'Chờ phê duyệt';

        $post->user_id = $userid;

        $post->name = $name;

        $post->usertype = $usertype;

        $post->location = $request->location;

        $post->phone = $request->phone;

        $post->email = $request->email;

        $post->website = $request->website;

        $post->ggmap = $request->ggmap;

        $childType = $request->input('customRadio');
        $post->child_type = $childType;

        $post->main_description = $request->main_description;
        $post->description1 = $request->description1;

        $main_image = $request->main_image;
        $image1 = $request->main_image;
        $image2 = $request->main_image;

        if ($main_image) {
           $imagename = uniqid(time() . '_') . '.' . $main_image->getClientOriginalExtension();
            $request->main_image->move('postimage', $imagename);
            $post->main_image = $imagename;
        }

        $post->save();
        return redirect()->back()->with('message', 'Thêm bài viết thành công');
    }

    public function show_post(){
        $user=Auth()->user();
        if (Auth::check() && Auth::user()->usertype == 'admin') {
            // Nếu là admin, hiển thị tất cả bài viết
            $post = Post::all();
        } else {
            // Nếu là user, chỉ hiển thị các bài viết có usertype là 'user'
            $post = Post::where('usertype', 'user')->get();
    }

        return view('admin.show_post', compact('post','user'));
    }

    public function rejected_posts(){
        $user=Auth()->user();
        $post = Post::where('post_status', 'Đã từ chối')->get();

        return view('admin.rejected_posts', compact('post','user'));
    }

    public function accepted_posts(){
        $user=Auth()->user();
        $post = Post::where('post_status', 'Đã phê duyệt')->get();

        return view('admin.accepted_posts', compact('post','user'));
    }

    public function pending_post(){
        $user=Auth()->user();
        $post = Post::where('post_status', 'Chờ phê duyệt')->get();

        return view('admin.pending_post', compact('post','user'));
    }    

    public function show_food_post(){
        $user=Auth()->user();
        $post = Post::where('post_type', 'Ẩm thức')->get();

        return view('admin.categories.show_food_post', compact('post','user'));
    }

    public function show_new_post(){
        $user=Auth()->user();
        $post = Post::where('post_type', 'Tin tức')->get();

        return view('admin.categories.show_new_post', compact('post','user'));
    }

    public function show_destination_post(){
        $user=Auth()->user();
        $post = Post::where('post_type', 'Điểm đến')->get();

        return view('admin.categories.show_destination_post', compact('post','user'));
    }
    
    public function show_resort_post(){
        $user=Auth()->user();
        $post = Post::whereIn('post_type', ['Khách sạn', 'Homestay'])->get();

        return view('admin.categories.show_resort_post', compact('post','user'));
    }

    public function other(){
        $post = Post::all();

        return view('admin.categories.other', compact('post'));
    }

    public function delete_post($id)
    {
        $post = Post::find($id);

        $imagePath = public_path('postimage/' . $post->main_image);
        $imagePath1 = public_path('postimage/' . $post->image1);
        $imagePath2 = public_path('postimage/' . $post->image2);

        // Kiểm tra nếu hình ảnh tồn tại, xóa hình ảnh
        if (file_exists($imagePath)) {
            @unlink($imagePath); // Sử dụng @ để tránh lỗi nếu tệp không tồn tại
            @unlink($imagePath1);
            @unlink($imagePath2);
        }

        $post->delete();

        return redirect()->back()->with('message','Xóa bài viết thành công');
    }
    
    public function edit_page($id){
        $post = Post::find($id);

        return view('admin.edit_page', compact('post'));
    }

        public function edit_location_page($id){
        $post = Post::find($id);

        return view('admin.edit_location_page', compact('post'));
    }

    public function update_post(Request $request,$id){
        $data=Post::find( $id );

        $data->title = $request->title;

        $data->post_type = $request->post_type;

        $data->post_status = 'Chờ phê duyệt';

        $data->location = $request->location;

        $data->phone = $request->phone;

        $data->email = $request->email;

        $data->website = $request->website;

        $data->ggmap = $request->ggmap;

        $childType = $request->input('customRadio');
        $data->child_type = $childType;

        $data->main_description = $request->main_description;

        $data->description1 = $request->description1;
       

        $main_image = $request->main_image;
        if ($main_image) {
            $imagename=time().'.'.$main_image->getClientOriginalExtension();
            $request->main_image->move('postimage', $imagename);
            $data->main_image = $imagename;
        }

        $data->save();

        return redirect()->back()->with('message','Cập nhật bài viết thành công');
    }

    public function view_post($id){
        $post = Post::find( $id );
        $user=Auth()->user();

        $hotpost = Post::where('post_status', 'Đã phê duyệt')
            ->latest()
            ->take(3)
            ->get();
        $newpost = Post::where('post_status', 'Đã phê duyệt')
            ->latest()
            ->take(3)
            ->get();
        $relatepost = Post::where('post_status', 'Đã phê duyệt')
            ->where('post_type', $post->post_type)
            ->where('id', '!=', $post->id)
            ->latest()
            ->take(3)
            ->get();

        if ($post->post_type === 'Homestay' || $post->post_type === 'Khách sạn') {
            return view('admin.view_location_post', compact('post','user'));
        } else {
            return view('admin.view_post', compact('post', 'hotpost', 'newpost', 'relatepost', 'user'));
        }
    }

    public function accept_post($id){
        $data = Post::find( $id );

        $data->post_status = 'Đã phê duyệt';

        $data->save();

        return redirect()->back()->with('message','Duyệt bài viết thành công');
    }

    public function reject_post($id){
        $data = Post::find( $id );

        $data->post_status = 'Đã từ chối';

        $data->save();

        return redirect()->back()->with('message','Từ chối duyệt bài viết thành công');
    }    


    // Quản lý tài khoản

    public function manage_user(){
        $post = User::where('usertype', 'user')->get();
        $user=Auth()->user();

        return view('admin.manage_user', compact('post','user'));
    }

    public function delete_user($id)
    {
        $post = User::find($id);

        $post->delete();

        return redirect()->back()->with('message','Xóa tài khoản người dùng thành công');
    }

    public function add_user_page(){
        $user=Auth()->user();
        return view("admin.add_user_page", compact("user"));
    }    

    public function add_user(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'Vui lòng nhập tên người dùng.',
            'name.string' => 'Tên người dùng phải là chuỗi.',
            'name.max' => 'Tên người dùng không được vượt quá 255 ký tự.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.string' => 'Địa chỉ email phải là chuỗi.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.max' => 'Địa chỉ email không được vượt quá 255 ký tự.',
            'email.unique' => 'Địa chỉ email đã tồn tại trong hệ thống.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.string' => 'Mật khẩu phải là chuỗi.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp.',
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();
        return redirect()->back()->with('message', 'Thêm người dùng thành công!');
    }

    public function edit_user_page($id){
        $post = User::find($id);

        return view('admin.edit_user_page', compact('post'));
    }    

    public function edit_user(Request $request, $id)
    {
        $data=User::find( $id );

        $data->name = $request->name;

        $data->email = $request->email;

        $data->password = bcrypt($request->password);

        $data->save();

        return redirect()->back()->with('message','Cập nhật tài khoản người dùng thành công');
    }
}
