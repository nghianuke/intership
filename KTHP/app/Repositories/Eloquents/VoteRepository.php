<?php 

namespace App\Repositories\Eloquents;
use App\Models\Votes;
use App\Repositories\Interfaces\VoteRepositoryInterface;

class VoteRepository implements VoteRepositoryInterface
{
	public function getAll(){
		return Votes::all();
	}

	public function getVoteByID($id){
		return get::findOrFail($id);
	}

	public function addVote(Votes $vote){
		//lấy dữ liệu
		return $vote->save();
	}

	public function updateVote(Votes $vote){
		return $vote->update();
	}

	public function deleteVote(Votes $vote){
		return $vote->delete();
	}
}

?>