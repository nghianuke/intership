<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Customer;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::paginate(2);
         
        return view('frontend.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand=Brand::pluck('name','id')->toArray();
        $category=Category::pluck('name','id')->toArray();
        return view('frontend.product.create',compact('brand','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $category_id = $request->category_id;
        $brand_id = $request->brand_id;

        $category = Category::findOrfail($category_id);
        $brand = Brand::findOrfail($brand_id);
         if($request->hasFile('image'))
        {
      $product->image= $request->file('image')->store('Product','public');
        }
        //lay du lieu
        $product = new Product([
            'product_code' => $request->code,
            'product_name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image'=>$request->image,
            'brand_id' =>$request->brand_id,
            'category_id' => $request->category_id ,
             ]);
       $product->save();
       return back()->with('message','On Your Successful Save');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer=Customer::pluck('last_name','id')->toArray();
        $product=Product::findOrfail($id);
        return view('frontend.product.show',compact('product','customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand=Brand::pluck('name','id')->toArray();
        $category=Category::pluck('name','id')->toArray();
        $pt=Product::findOrfail($id);
        return view('frontend.product.edit',compact('pt','brand','category'));
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
        $category_id=$request->category_id;
         $brand_id=$request->brand_id;

        $brand=Brand::findOrfail($brand_id);
        $category=Category::findOrfail($category_id);
       

        $product=Product::findOrfail($id);
        $product->update([
'product_code' => $request->code,
            'product_name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image'=>$request->image,
            'brand_id' =>$request->brand_id,
            'category_id' => $request->category_id ,

        ]);
        $product->save();
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
        $product=Product::findOrfail($id);
        $product->delete();
        return back()->with('destroy','You Have Successfully Deleted  Data');
    }
    public function search(Request $req)
    {
        $product = Product::where('product_name','like','%'.$req->keyy.'%')->get();
        return view('frontend.product.search',compact('product'));
    }
}
