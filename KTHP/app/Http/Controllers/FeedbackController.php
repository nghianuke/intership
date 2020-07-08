<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use App\Http\Requests\FeedbackRequest;
use Illuminate\Http\Requests;
use Session;
use Mail;
use App\Repositories\Interfaces\FeedbackRepositoryInterface;
class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $FeedbackRepository;
    public function __construct(FeedbackRepositoryInterface $FeedbackRepository)
    {
        $this->FeedbackRepository = $FeedbackRepository;
    }

    public function index()
    {
        $feedback = $this->FeedbackRepository->getAll();
        // dd($post);
        return view('content.admin.feedback.index',compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackRequest $request)
    {
         $feedback = new Feedback([
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content
        ]);
       
        $this->FeedbackRepository->AddFeedback($feedback);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FeedbackRequest $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = $this->FeedbackRepository->getFeedbackByID($id);
        if ($feedback) {
            $this->FeedbackRepository->deleteFeedback($feedback);
        } 
        return redirect()->route('feedback.index')->with('success','Thành công!');
    }
    
}
