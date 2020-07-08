<?php
namespace App\Repositories\Eloquents;
use App\Repositories\Interfaces\NewsRepositoryInterface;
use App\Models\News;
class NewsRepository implements NewsRepositoryInterface
{
	public function getAll(){
		return News::all();
	}
	public function getNewsByID($id){
		return News::findOrFail($id);
	}
	public function addNews(News $new){
		//lay du lieu
		return $new->save();
	}

	public function updateNews(News $new){
		return $new->update();
	}
	public function deleteNews(News $new){
		return $new->delete();
	}	
}

?>