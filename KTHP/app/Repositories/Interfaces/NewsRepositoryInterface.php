<?php
namespace App\Repositories\Interfaces;
use App\Models\News;
interface  NewsRepositoryInterface{
	public function getAll();

	public function addNews(News $new);



	public function getNewsByID($id);

	public function updateNews(News $new);


	public function deleteNews(News $new);
}
?>
