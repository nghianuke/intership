<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Seoable;
use App\Http\Requests\ProductRequest;
use App\Models\Product_image;


use App\Repositories\Interfaces\ProductRepositoryInterface;


class ProductController extends Controller
{
    private $ProductRepository;
    public function __construct(ProductRepositoryInterface $ProductRepository)
    {
        $this->ProductRepository = $ProductRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $product=$this->ProductRepository->getAll();
        // $product=Product::paginate(5);
        return view('Content.Admin.Product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $tag = Tag::pluck('tag_name','id')->toArray();
       $category=Category::pluck('name','id')->toArray();
         // $category=Category::pluck('name','id')->toArray()->get();
       return view('Content.Admin.Product.create',compact('category','tag'));
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

          // $product_code=Str::random(10);
        if ($request->hasFile('thumbnail')) {
            $file = $request->thumbnail;
            $file_name = $file->getClientOriginalName();
            //upload file 
            $file->move('images/product/thumbnails', $file_name);
        }
        $product= new Product;
        $product_code = rand(1,99);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->thumbnail = $file_name;
        $product->product_code = $product_code;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->author = $request->author;
        $product->size = $request->size;
        $product->discount = 50;
        $product->translator = $request->translator;
        $product->cover_type = $request->cover_type;
        $product->pages = $request->pages;
        $product->sku = $request->sku;
        $product->publishing = $request->publishing;
        $product->issuing = $request->issuing;
        $product->save();
         //lay cac du lieu trong product_tag
        $tag_list = $request->tag;
        // luu du lieu tag vao pivot table(Post_tag)
        $product->tag()->attach($tag_list);
        $product->save();
        // SEO
        $seo_data = new Seoable([
            'title' => $request->name,
            'description' => $request->description,
            'keyword' => Str::slug($request->name, "-"),
        ]);
        $product->seo()->save($seo_data);
        $this->ProductRepository->addProduct($product);
        //lay id cua product
        $product_id = $product->id;
        
        if ($request->hasFile('image')) {
            foreach ($request->File('image') as $file) {
                $post_img = new product_image([
                    'image_name' => $file->getClientOriginalName(),
                    'product_id' => $product_id
                ]);
                $file->move('images/product', $file->getClientOriginalName());
                $post_img->save();
            }
        }
        // dd($product);
        return redirect()->route('product.index')->with('success','Thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::findOrfail($id);
        $image = Product_image::where('product_id',$id)->get();
        // $email = \DB::table('tags')->where('slug', 'phan-duy-vinh')->value('tag_name');
        // dd($post);
        return view('Content.Admin.Product.detail',compact('image','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 2dongduoilarepo
        $product= $this->ProductRepository->getProductById($id);
        $pt=$this->ProductRepository->getProductById($id);

        $category=Category::pluck('name','id')->toArray();
         // $pt=Product::findOrfail($id);
        return view('Content.Admin.Product.edit',compact('pt','category','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        // dd("oke");
      $file_name = $request->thumbnail;
      if ($request->hasFile('thumbnail')) {
        $file = $request->thumbnail;
        $file_name = $file->getClientOriginalName();
            //upload file 
        $file->move('images/product/thumbnails', $file_name);
    }
    $product=Product::findOrfail($id);
    $product->update([
     'name'=>$request->name,
     'description'=>$request->description,
     'thumbnail'=>$file_name,
     'product_code'=>'book'.rand(1,999),
     'category_id'=>$request->category_id,
     'price'=>$request->price,
     'quantity'=>$request->quantity,
     'author'=>$request->author,
     'size'=>$request->size,
     'translator'=>$request->translator,
     'cover_type'=>$request->cover_type,
     'pages'=>$request->pages,
     'sku'=>$request->sku,
     'publishing'=>$request->publishing,
     'issuing'=>$request->issuing

 ]);
    $this->ProductRepository->updateProduct($product);
       // $product->save();

        //lay id cua product
    $product_id = $product->id;
    
    if ($request->hasFile('image')) {
        foreach ($request->File('image') as $file) {
            $post_img = new product_image([
                'image_name' => $file->getClientOriginalName(),
                'product_id' => $product_id
            ]);
            $file->move('images/product', $file->getClientOriginalName());
            $post_img->save();
        }
    }
        // dd($product);
    return back()->with('success','Thành công!');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->ProductRepository->getProductById($id);
        $this->ProductRepository->deleteProduct($product);
        return back()->with('success','Thành công!');
    }

    public function search(Request $request)
    {
        try {
            if ($request->ajax()) {
                $key_search = $request['keyword_value'];
                $product = Product::where('name','like',"%{$key_search}%")->get();
                if (count($product)) {
                    $return_data = view('backend.product.search',compact('product'))->render();
                    return response()->json(array('success'=> true, 'product' => $return_data));
                }else{
                    return response()->json(array('success'=> true, 'product' => "<h3 class='d-block text-center'>Empty!</h3>"));
                }
            }
            
        } catch (Exception $e) {
            return redirect('product');
        }
    }

    // phuong thuc lay post co cung tag_id
    public function productIntag($tag_id){
        // lay du lieu 
        $product =Tag::findOrfail($tag_id)->product()->get();
        // dd($post);
        // do ra view
        return view('Content.Admin.Product.productintag',compact('product'));
    }
}
