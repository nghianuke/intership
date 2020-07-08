<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Requests;
use App\Http\Requests\NewsRequest;
use App\Models\Seoable;
use App\Repositories\Interfaces\NewsRepositoryInterface;
class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $NewsRepository;
    public function __construct(NewsRepositoryInterface $NewsRepository)
    {
        $this->NewsRepository = $NewsRepository;
    }

    public function index()
    {
        $news = $this->NewsRepository->getAll();
        return view('content.admin.new.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.admin.new.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        if ($request->hasFile('thumbnail')) {
            $file = $request->thumbnail;
            $file_name = $file->getClientOriginalName();
            //upload file 
            $file->move('images/news/thumbnails', $file_name);
        }
        $new = new News([
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => $file_name,
            'status' => $request->status
        ]);
        $new->save();
        // SEO
        $seo_data = new Seoable([
            'title' => $request->title,
            'description' => $request->content,
            'keyword' => Str::slug($request->title, "-"),
        ]);
        $new->seo()->save($seo_data);
        $this->NewsRepository->AddNews($new);
        return redirect()->route('new.index')->with('success','Thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {//mới thêm vào
       
       $new = $this->NewsRepository->find($id);
        return view('content.admin.new.show', compact('new'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = $this->NewsRepository->getNewsByID($id);
        return view('content.admin.new.edit',compact('new'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
         $new = $this->NewsRepository->getNewsByID($id);
            // dd($request['title']);
        //2.cap nhat lai du lieu cua id can update
        $new->update([
            'title' => $request['title'],
            'status' => $request['status'],
            'content' => $request['content'],
        ]);
        
         $this->NewsRepository->updateNews($new);
        return redirect()->route('new.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = $this->NewsRepository->getNewsByID($id);
        if ($new) {
            $this->NewsRepository->deleteNews($new);
        } 
        return redirect()->route('new.index');
    }
}
