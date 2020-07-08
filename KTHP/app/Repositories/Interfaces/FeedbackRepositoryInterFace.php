<?php
namespace App\Repositories\Interfaces;
use App\Models\Feedback;
interface  FeedbackRepositoryInterface{
	public function getAll();

	public function addFeedback(Feedback $feedback);

	public function getFeedbackByID($id);

	public function updateFeedback(Feedback $feedback);

	public function deleteFeedback(Feedback $feedback);
}
?>
