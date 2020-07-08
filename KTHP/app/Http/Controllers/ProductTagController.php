<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\ProductTag;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $tag=Tag::pluck('tag_name','id')->toArray();
         $product=Product::paginate(2);
         $product_tag=ProductTag::paginate(2);
        return view('backend.product_tag.index',compact('product','product_tag','tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $tag=Tag::pluck('tag_name','id')->toArray();
          $product=Product::pluck('name','id')->toArray();
        return view('backend.product_tag.create',compact('tag','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $product_tag= new ProductTag([
           'product_id'=>$request->product_id,
           'tag_id'=>$request->tag_id
       ]);
       $product_tag->save();
        return back()->with('message','On Your Successful Save');
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
