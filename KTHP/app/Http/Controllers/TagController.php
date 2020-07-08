<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\HTTP\Requests\TagRequest;

use App\Repositories\Interfaces\TagRepositoryInterface;
class TagController extends Controller
{
     private $TagRepository;
    public function __construct(TagRepositoryInterface $TagRepository)
    {
        $this->TagRepository = $TagRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag =$this->TagRepository->getALL();
        // $tag=Tag::all();
        return view('Content.Admin.Tag.index',compact('tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Content.Admin.Tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
       $tag= new Tag([
           'tag_name'=>$request->tag_name,
           'slug'=>$request->slug
       ]);
       // $tag->save();
       $this->TagRepository->addTag($tag);
        return redirect()->route('tag.index')->with('success','Tạo thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag=$this->TagRepository->getTagById($id);
        // $tag=Tag::findOrfail($id);
        return view('Content.Admin.Tag.edit',compact('tag'));
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
        $tag=Tag::findOrfail($id);
        $tag->update([
           'tag_name'=>$request->tag_name,
           'slug'=>$request->slug
        ]);
        $this->TagRepository->updateTag($tag);
        // $tag->save();
        return redirect()->route('tag.index')->with('success','Thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag=$this->TagRepository->getTagById($id);
        // $tag=Tag::findOrfail($id);
        $tag->delete();
        return redirect()->route('tag.index')->with('success','Thành công!');
    }
}