<?php


namespace MonProjet\Service;

class CustomerService {

	


	public function getCustomersbycountry($country){
		
		$db = new Database(); 

		$sql ="SELECT * FROM customers WHERE country LIKE ?";
		
		$customers = $db->query($sql,[$country]);

	
		return $customers;
	}


}
