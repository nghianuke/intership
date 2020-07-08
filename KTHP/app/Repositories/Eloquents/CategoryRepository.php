<?php
namespace App\Repositories\Eloquents;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;
class CategoryRepository implements CategoryRepositoryInterface
{
	public function getAll(){
		return Category::all();
	}
	public function getCategoryByID($id){
		return Category::findOrFail($id);
	}
	public function addCategory(Category $category){
		//lay du lieu
		return $category->save();
	}
	public function updateCategory(Category $category){
		return $category->update();
	}
	public function deleteCategory(Category $category){
		return $category->delete();
	}	
}

?>