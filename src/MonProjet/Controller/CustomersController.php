<?php

namespace MonProjet\Controller;
use Silex\Application;
use MonProjet\Service\CustomerService;
use Symfony\Component\HttpFoundation\Request;


class CustomersController {

	public function main(Application $app, Request $request ) {
		
		$country = $request->query->get('country');
		$customerService = new CustomerService();
		$customers = $customerService->getCustomersbycountry($country);


		return $app['twig']->render('customers.twig', array(
			'customers'=> $customers, 'country'=> $country

			));
	
	}



}