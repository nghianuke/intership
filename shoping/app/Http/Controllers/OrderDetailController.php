<?php

namespace App\Http\Controllers;
use App\Models\OderDetail;
use App\Models\Oder;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // $products=Product::all();
    //   $products = $request->products;
    //     $quantities = $request->quantities; 
    //     $total = 0;
    //     foreach ($products as $key => $value) {
    //         $price = DB::table('products')->where('id', $products[$key])->first();
    //         $price = $price->price;
    //         $total += $price * $quantities[$key];
    //     }
    // {   $order_id=$request->order_id;
    //     $order=Order::findOrfail($order_id);
    //      $product_id=$request->product_id;
    //     $product=Order::findOrfail($product_id);
    //     $order= new OrderDetail([
    //         'product_id'=>$request->oder_product
    //      'quantity'=>$request->quantity,
    //      'price'=>$price,
    //      'total_amout'=>$total
    //     ]);
    //     $order->save();
    //     return back();
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
        //
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
        //
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
