<?php
namespace App\Repositories\Eloquents;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Repositories\Interfaces\TagRepositoryInterface;
class TagRepository implements TagRepositoryInterface
{
	public function getAll(){
       return Tag::all();
	}
	
	public function addTag(Tag $tag){
         //lay du lieu
		return $tag->save();
	}
	public function getTagById($id){
		   return Tag::findOrfail($id);
		}
	public function updateTag(Tag $tag){
		return $tag->update();
	}
	public function deleteTag(Tag $tag){
		return $tag->delete();
	}

}
 ?>
