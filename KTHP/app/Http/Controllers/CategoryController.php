<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Session;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Requests;
use App\Repositories\Interfaces\CategoryRepositoryInterface;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $CategoryRepository;
    public function __construct(CategoryRepositoryInterface $CategoryRepository)
    {
        $this->CategoryRepository = $CategoryRepository;
    }

    public function index()
    {
         $category = $this->CategoryRepository->getAll();
        // dd($post);
        return view('content.admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
         $category = new Category([
            'name' => $request->name,
            'description' => $request->description
        ]);
        $this->CategoryRepository->AddCategory($category);
        return back();
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
         $category = $this->CategoryRepository->getCategoryByID($id);
        return view('content.admin.Category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = $this->CategoryRepository->getCategoryByID($id);
        $category->name = $request->name;
        $category->description = $request->description;

        $this->CategoryRepository->updateCategory($category);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = $this->CategoryRepository->getCategoryByID($id);
        if ($category) {
            $this->CategoryRepository->deleteCategory($category);
        } 
        return back();
    }
}
