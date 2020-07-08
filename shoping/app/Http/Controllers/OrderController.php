<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;  
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $orders = Order::paginate(1);
        return view('frontend.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     // $transaction_date = Carbon::now();
     //    $customers = Customer::pluck('first_name', 'id')->toArray();
     //    $products = Product::all();

     //    return view('frontend.orders.create',compact('customers','products','transaction_date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       // dd($request->all());
       //  $customer_id=$request->customer_id;
       //  $customer=Customer::findOrfail($customer_id);
       // $order= new Order([
       //  'order_number'=>$request->order_number,
       //  'transaction_date'=>Carbon::now(),
       //  'customer_id'=>$request->customer_id,
       //  'status'=>$request->status,
       //  'total_amout'=>$request->total_amount,

       // ]);
       // $order->save();
       // return back()->with('message','Save Data Success');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::all();
        $order = Order::findOrfail($id);
        return view('Order.detail',compact('order', 'product'));
        // $product=Product::findOrfail($id);
        // $customers=Customer::findOrfail($id);
        // $order=Order::findOrfail($id);
        // return view('frontend.orders.show',compact('order','customers','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order=Order::findOrfail($id);
        return view('frontend.orders.edit',compact('order'));
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
         $order=Order::findOrfail($id);
        $order->Update([
          'status'=>$request->status,
        ]);
        $order->save();
        return back()->with('update','Update Data Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
