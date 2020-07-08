<?php
namespace App\Repositories\Interfaces;
use App\Models\Category;
interface  CategoryRepositoryInterface{
	public function getAll();

	public function addCategory(Category $category);

	public function getCategoryByID($id);

	public function updateCategory(Category $category);

	public function deleteCategory(Category $category);
}
?>
