<?php
namespace App\Repositories\Eloquents;
use App\Repositories\Interfaces\FeedbackRepositoryInterface;
use App\Models\Feedback;
class FeedbackRepository implements FeedbackRepositoryInterface
{
	public function getAll(){
		return Feedback::all();
	}
	public function getFeedbackByID($id){
		return Feedback::findOrFail($id);
	}
	public function addFeedback(Feedback $feedback){
		//lay du lieu
		return $feedback->save();
	}
	public function updateFeedback(Feedback $feedback){
		return $feedback->update();
	}
	public function deleteFeedback(Feedback $feedback){
		return $feedback->delete();
	}	
}

?>