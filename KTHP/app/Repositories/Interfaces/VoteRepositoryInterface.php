<?php

namespace App\Repositories\Interfaces;
use App\Models\Votes;
// use App\Repositories\Eloquents\VoteRepository;

interface VoteRepositoryInterface{
	public function getAll();

	public function addVote(Votes $vote);

	public function getVoteById($id);

	public function updateVote(Votes $vote);

	public function deleteVote(Votes $vote);
}


?>