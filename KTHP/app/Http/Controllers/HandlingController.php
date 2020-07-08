<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\News;
use App\User;
use App\Models\Votes;
use App\Models\Address;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Feedback;
use App\Models\Product_image;
use Illuminate\Support\Facades\Auth;
class HandlingController extends Controller
{
    //
    public function index(){
    	$products = Product::where('isdeleted',0)->orderBy('id', 'DESC')->limit(15)->get();
        $categories = Category::all();
        return view('Content.Client.Home.index', compact('products','categories'));
    }
    public function more_product(){
        $products = Product::where('isdeleted',0)->orderBy('id', 'DESC')->paginate(16);
        $categories = Category::all();
        $authors = array_unique(Product::pluck('author','id')->toArray());
        return view('Content.Client.Home.BookinCate', compact('products','categories','authors'));
    }

    public function admin(){
        $product = Product::count();
        $category = Category::count();
        $user = User::count();
        $order = Order::count();
        $new = News::count();
        $tag = Tag::count();
        $feedback = Feedback::count();
        return view('Content.Admin.Dashboard',compact('product','order','category','user','new','tag','feedback'));
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
    public function productDetail($id){
    	$product = Product::findOrfail($id);
        $categories = Category::all();
        $images = Product_image::where('product_id',$id)->get();
        if(Auth::check()){
            $vote = Votes::where('user_id',Auth::user()->id)->where('product_id',$id)->get();
        }else{
            $vote = [];
        }
        return view('Content.Client.Home.product_detail', compact('product','images','categories','vote'));
    }
    public function faq(){
        $categories = Category::all();
        return view('Content.Client.Layouts.faq', compact('categories'));
    }
    public function about_us(){
        $categories = Category::all();
        return view('Content.Client.Layouts.about',compact('categories'));
    }
    public function feedback(){
        $categories = Category::all();
        return view('Content.Client.Home.feedback', compact('categories'));
    }
    public function new() {
        $news = News::orderBy('id', 'DESC')->limit(6)->get();
        $categories = Category::all();
        return view('Content.Client.Home.new', compact('news','categories'));
    }
    public function new_detail($id) {
        $new = News::findOrfail($id);
        $categories = Category::all();
        return view('Content.Client.Home.new_detail', compact('new','categories'));
    }

    public function ProductInCategory($id){
        $categories = Category::all();
        $products = Product::where('isdeleted',0)->orWhere('category_id',$id)->orderBy('id', 'DESC')->paginate(16);
        $authors = array_unique(Product::pluck('author','id')->toArray());
        return view('Content.Client.Home.BookinCate', compact('products','categories','authors'));
    }
    public function AuthorInProduct($author){
        $categories = Category::all();
        $authors = array_unique(Product::pluck('author','id')->toArray());
        $products = Product::where('author',$author)->orderBy('id', 'DESC')->paginate(16);
        return view('Content.Client.Home.BookinCate', compact('categories','products','authors'));
    }

    public function profile(){
        $categories = Category::all();
        $orders = Order::where('user_id',Auth::id())->get();
        $user = User::findOrfail(Auth::id());
        return view('Content.Client.Home.Profile', compact('categories','orders','user'));
    }

    public function order_detail($id){
        $categories = Category::all();
        $order_detail = OrderDetail::where('order_id','like',$id)->get();
        $user = User::findOrfail(Auth::id());
        $order = Order::findOrfail($id);
        return view('Content.Client.Home.order_detail', compact('categories','order_detail','user','order'));
    }
    public function address() {
        $categories = Category::all();
        $user = User::findOrfail(Auth::id());
        $check_address = Address::where('user_id',Auth::id())->first();
        // dd($check_address);
        return view('Content.Client.Home.user_address',compact('check_address','user'));
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $categories = Category::all();
        $authors = array_unique(Product::pluck('author','id')->toArray());
        $products = Product::where('name','LIKE',"%$keyword%")->orWhere('author','LIKE',"%$keyword%")->paginate(16);
        return view('Content.Client.Home.BookinCate', compact('categories','products','authors'));

    }

}