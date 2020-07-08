<?php
namespace App\Repositories\Eloquents;
use App\Models\Address;
use App\Repositories\Interfaces\AddressRepositoryInterface;
class AddressRepository implements AddressRepositoryInterface
{
	
	public function addAddress(Address $address){
         //lay du lieu
		return $address->save();
	}
	public function updateAddress(Address $address){
		return $address->update();
	}
}
 ?>
