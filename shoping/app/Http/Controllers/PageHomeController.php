<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use\App\Models\Order;
use\App\Models\OrderDetail;
use\App\Models\Customer;
use Illuminate\Http\Request;
use App\DB;
use Carbon\Carbon;


class PageHomeController extends Controller
{
    public function index(){
     
    	 $product=Product::all();
         $brand=Brand::all();
    	$category=Category::all();
        return view('user.index',compact('product','category','brand'));
    }
    public function productIncategory($id){
        $category = Category::all();
        $brand = Brand::all();
        // lay du lieu 
        $product =Category::findOrfail($id)->product()->get();
        return view('user.index',compact('product','category','brand'));
    }
    public function productInbrand($id){
        $category = Category::all();
        $brand = Brand::all();
        // lay du lieu 
        $product =Category::findOrfail($id)->product()->get();
        return view('user.index',compact('product','category','brand'));
    }
    public function search(Request $req)
    {
        $category=Category::all();
         $brand=Brand::all();
        $product = Product::where('product_name','like','%'.$req->key_word.'%')->get();
        return view('result',compact('product','category','brand'));
    }
    public function checkoutconfirm($id)
            {
                $product =Product::findOrfail($id);
                $customer = Customer::pluck('first_name','id')->toArray();
                return view('user.checkout',compact('id','customer','product'));
            }
    public function checkout(Request $request){
        $product = Product::findOrfail($request->id);
        $order_number = "OD".rand(1111,9999);
        $order = Order::insertGetId([
           'order_number' => $order_number,
            'transaction_date' => Carbon::now(),
            'customer_id' => $request->customer_id,
            'total_amout' => $product->price*$request->quantity,
            'status' => 'chưa xác nhận'
        ]);

        $orderdetail = new OrderDetail([
           'order_id' => $order,
            'product_id' => $request->id,
            'quantity' => $request->quantity,
            'price' => $product->price,
            'sub_total' => $product->price*$request->quantity
        ]);
        $orderdetail->save();
        return back()->with('success','You Have Order Successfully');
    }
    public function show(){
         $orderdetail = OrderDetail::all();
        $order = Order::all();
        

      return view('user.ph',compact('orderdetail','order'));
    }
    
   
}
