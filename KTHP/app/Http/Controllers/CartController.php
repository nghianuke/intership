<?php

namespace App\Http\Controllers;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function index()
    {
        //
        $cart = Cart::content();
        $categories = Category::all();
        return view('Content.Client.Cart.index',compact('cart','categories'));
    }

    public function delete($id)
    {
        Cart::remove($id);
        return back()->with('success','Đã xóa!');
    }
    public function deleteall()
    {
        Cart::destroy();
        return back()->with('success','Đã xóa!');
    }
    public function setquantity(Request $request)
    {
        $id = $request->rowId;
        $quantity = $request->quantity;
        Cart::update($id, $quantity);
        return back()->with('success','Đã thay đổi!');
    }
    public function addCart($id, Request $request)
    {
        $product = Product::findorFail($id);
        if($request->quantity){
            $quantity = $request->quantity;
        }else{
            $quantity = 1;
        }
        $cart = ['id' => $id, 'name' => $product->name,'qty' => $quantity, 'price' => $product->price,'weight' => 0, 'options' => ['img' => $product->thumbnail,'product_code' => $product->product_code]];
        Cart::add($cart);
        // dd(Cart::content());
        return redirect('cart')->with('success','Sản phẩm đã được thêm vào giở!');
    }

    public function checkout(Request $request)
    {
        if(Auth::check()){
            if(Cart::count()>=1){
            $order_number = 'OD'.rand(1000,9999).'_'.Carbon::now('Asia/Ho_Chi_Minh')->year.Carbon::now('Asia/Ho_Chi_Minh')->month.Carbon::now('Asia/Ho_Chi_Minh')->day;
            $order = Order::insertGetId([
                       'order_code' => $order_number,
                        'transaction_date' => Carbon::now('Asia/Ho_Chi_Minh'),
                        'user_id' => Auth::user()->id,
                        'message' => 'khong y kien',
                        'total_amount' => Cart::total(),
                        'status' => 0
            ]);
            foreach (Cart::content() as $cart) {
                $orderdetail = new OrderDetail([
                           'order_id' => $order,
                            'product_id' => $cart->id,
                            'quantity' => $cart->qty,
                            'price' => $cart->price,
                            'sub_total' => $cart->price*$cart->qty
                ]);
                $orderdetail->save();
            }
            Cart::destroy();
            return back()->with('success','Đơn hàng đã được đặt!');
        }
        return back()->with('error','Bạn chưa có sản phẩm!');
        }
        return redirect('login')->with('error','Bạn cần đăng nhập để tiếp tục!');
        
    }
}
