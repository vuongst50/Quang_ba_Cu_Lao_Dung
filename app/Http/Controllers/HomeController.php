<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        if (Auth::id()){
            $post = Post::all();
            $user=Auth()->user();

            $usertype = Auth()->user()->usertype;

            $userCount = User::where('usertype', 'user')->count();
            $postCount = Post::count();
            $waitPostCount = Post::where('post_status','Chờ phê duyệt')->count();
            $rejectedPostCount = Post::where('post_status','Đã từ chối')->count();
            $newPostCount   = Post::where('post_type','Tin tức')->count();
            $destinationPostCount = Post::where('post_type','Điểm đến')->count();
            $foodPostCount = Post::where('post_type','Ẩm thực')->count();
            $resortPostCount = Post::whereIn('post_type',['Khách sạn', 'Homestay'])->count();
            
            // if ($usertype == "user"){
            //     return view("home.homepage", compact("post"));
            // }
            // else if ($usertype == "admin"){
            //     return view("admin.adminhome");
            // }

            // else{
            //     return redirect()->back();
            // }

            return view("admin.adminhome", compact("userCount", "postCount", "waitPostCount", "rejectedPostCount", 
            "newPostCount", "foodPostCount", "destinationPostCount", "resortPostCount", "user"));
        }
    }

    public function homepage(){
        $foodsPost = Post::where('post_status', 'Đã phê duyệt')
            ->where('post_type', 'Ẩm thực')->latest()->take(6)->get();

        $newsPosts = Post::where('post_status', 'Đã phê duyệt')
            ->where('post_type', 'Tin tức')->latest()->take(5)->get();
            
        $destinationPosts = Post::where('post_status', 'Đã phê duyệt')
            ->where('post_type', 'Điểm đến')->latest()->take(5)->get();
         
        return view("home.homepage", compact('newsPosts', 'destinationPosts' ,'foodsPost'));
    }

    public function welcome(){
        return view("welcome");
    }

    public function post_details($id){
        $post = Post::find($id);

        if ($post->post_status == 'Chờ phê duyệt') {
            abort(404, 'Page not found');
        }

        $hotpost = Post::where('post_status', 'Đã phê duyệt')
            ->latest()
            ->take(4)
            ->get();
        $newpost = Post::where('post_status', 'Đã phê duyệt')
            ->latest()
            ->take(4)
            ->get();
        $relatepost = Post::where('post_status', 'Đã phê duyệt')
            ->where('post_type', $post->post_type)
            ->where('id', '!=', $post->id)
            ->latest()
            ->take(4)
            ->get();
        if ($post->post_type === 'Homestay' || $post->post_type === 'Khách sạn') {
            return view('home.details.location_details', compact('post', 'relatepost'));
        } else {
            return view('home.details.post_details', compact('post', 'hotpost', 'newpost', 'relatepost'));
        }
    }

    public function tintuc_sukien(){
        
        $newsPosts = Post::where('post_status', 'Đã phê duyệt')
            ->where('post_type', 'Tin tức')
            ->orderBy('created_at', 'desc')
            ->get();
            
        $hotpost = Post::where('post_status', 'Đã phê duyệt')
            ->latest()
            ->take(4)
            ->get();
        $newpost = Post::where('post_status', 'Đã phê duyệt')
            ->latest()
            ->take(4)
            ->get();

        return view("home.tintuc&sukien", compact('newsPosts', 'hotpost', 'newpost',));
    }

    public function amthuc(){
        
        $foodPosts = Post::where('post_status', 'Đã phê duyệt')
            ->where('post_type', 'Ẩm thực')
            ->orderBy('created_at', 'desc')
            ->get();

        return view("home.amthuc", compact('foodPosts'));
    }

    public function diemden(){
        
        $dlst_Posts = Post::where('post_status', 'Đã phê duyệt')
            ->where('child_type', 'Du lịch sinh thái')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        $dlvh_Posts = Post::where('post_status', 'Đã phê duyệt')
            ->where('child_type', 'Du lịch văn hóa')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
            
        $hotpost = Post::where('post_status', 'Đã phê duyệt')
            ->latest()
            ->take(4)
            ->get();
        $newpost = Post::where('post_status', 'Đã phê duyệt')
            ->latest()
            ->take(4)
            ->get();

        return view("home.diemden", compact('dlst_Posts', 'dlvh_Posts', 'hotpost', 'newpost',));
    }

    public function dulichsinhthai(){
        
        $newsPosts = Post::where('post_status', 'Đã phê duyệt')
            ->where('child_type', 'Du lịch sinh thái')
            ->orderBy('created_at', 'desc')
            ->get();
            
        $hotpost = Post::where('post_status', 'Đã phê duyệt')
            ->latest()
            ->take(4)
            ->get();
        $newpost = Post::where('post_status', 'Đã phê duyệt')
            ->latest()
            ->take(4)
            ->get();

        return view("home.dulichsinhthai", compact('newsPosts', 'hotpost', 'newpost',));
    }

        public function dulichvanhoa(){
        
        $newsPosts = Post::where('post_status', 'Đã phê duyệt')
            ->where('child_type', 'Du lịch văn hóa')
            ->orderBy('created_at', 'desc')
            ->get();
            
        $hotpost = Post::where('post_status', 'Đã phê duyệt')
            ->latest()
            ->take(4)
            ->get();
        $newpost = Post::where('post_status', 'Đã phê duyệt')
            ->latest()
            ->take(4)
            ->get();

        return view("home.dulichvanhoa", compact('newsPosts', 'hotpost', 'newpost',));
    }


    public function nghiduong(){

        $post = Post::where('post_status', 'Đã phê duyệt')
            ->whereIn('post_type', ['Khách sạn', 'Homestay'])
            ->latest()
            ->take(6)
            ->get();

        return view("home.nghiduong", compact('post'));
    }

    public function khachsan(){

        $post = Post::where('post_status', 'Đã phê duyệt')
            ->where('post_type', 'Khách sạn')
            ->latest()
            ->take(6)
            ->get();

        return view("home.nghiduong", compact('post'));
    }

    public function homestay(){

        $post = Post::where('post_status', 'Đã phê duyệt')
            ->where('post_type', 'Homestay')
            ->latest()
            ->take(6)
            ->get();

        return view("home.nghiduong", compact('post'));
    }

    public function search(Request $request){
        $query = $request->input('search');

        $post = Post::query()
            ->where('title', 'like', '%' . $query . '%')
            ->orWhere('post_type', 'like', '%' . $query . '%')
            ->get();

        return view('home.searching_page', compact('post', 'query'));
    }
}
