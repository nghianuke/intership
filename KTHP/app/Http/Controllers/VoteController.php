<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Votes;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\VoteRequest;
use App\Repositories\Interfaces\VoteRepositoryInterface;
use App\Repositories\Eloquents\VoteRepository;


class VoteController extends Controller
{
    private $VoteRepository;

    public function __construct(VoteRepositoryInterface $VoteRepository)
    {
        $this->VoteRepository = $VoteRepository;
    }

    public function index()
    {
        $vote= $this->VoteRepository->getAll();
        return view('Content.admin.vote.index',compact('vote'));
    }


    public function create()
    {
       
        return view('Content.admin.vote.create');
    }


    public function store(VoteRequest $request)
    {
        $vote = new Votes;
        $vote->star = $request->star;
        $vote->title = $request->title;
        $vote->comment = $request->comment;
       
        $vote->product_id = $request->product_id;
        $vote->user_id = Auth::user()->id;
        // $vote->save();
        $this->VoteRepository->addVote($vote);
        if ($vote) {
            return back()->with('success',' Thành công ! Cảm ơn bạn đã đánh giá sẳn phẩm');
        }else{
            return back()->with('error','Lưu thông tin thất bại');
        }
    }


    public function show($id)
    {
        $vote = Votes::findOrfail($id);
        return view('Content.admin.vote.detail',compact('vote'));
    }

    public function edit($id)
    {
        $vote = Votes::findOrfail($id);
        return view('vote.edit',compact('vote'));
    }

    public function update(Request $request, $id)
    {

        $vote = Votes::findOrfail($id);
        $vote->star = $request->star;
        $vote->title = $request->title;
        $vote->comment = $request->comment;

        $vote->update();
        return back()->with('success','Data saved successfully!');
    }


    public function destroy($id)
    {
        $vote = Votes::findOrfail($id);
        if ($vote) {
            $vote->delete();
        } 
        return redirect()->action('VoteController@index')->with('success','Thành công!');
    }
}
