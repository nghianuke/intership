<?php
namespace App\Repositories\Interfaces;
use App\Models\Tag;

interface TagRepositoryInterface{
	public function getAll();
	public function addTag(Tag $tag);
	public function getTagById($id);
	public function updateTag(Tag $tag);
	public function deleteTag(Tag $tag);
}
 ?>
