<?php
namespace App\Repositories\Interfaces;
use App\Models\Address;

interface AddressRepositoryInterface{
	public function addProduct(Product $product);
	public function updateProduct(Product $product);
}
 ?>
