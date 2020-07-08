<?php
namespace App\Repositories\Interfaces;
use App\Models\Product;

interface ProductRepositoryInterface{
	public function getAll();
	public function addProduct(Product $product);
	public function getProductById($id);
	public function updateProduct(Product $product);
	public function deleteProduct(Product $product);
}
 ?>
