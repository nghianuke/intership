<?php
namespace App\Repositories\Eloquents;
use App\Models\Product;
use App\Models\Category;
use App\Repositories\Interfaces\ProductRepositoryInterface;
class ProductRepository implements ProductRepositoryInterface
{
	public function getAll(){
       return Product::all();
	}
	
	public function addProduct(Product $product){
         //lay du lieu
		return $product->save();
	}
	public function getProductById($id){
		   return Product::findOrfail($id);
		}
	public function updateProduct(Product $product){
		return $product->update();
	}
	public function deleteProduct(Product $product){
		$product->isdeleted = 1;
		return $product->save();
	}
}
 ?>
