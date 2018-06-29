<?php

namespace MonProjet\Controller;

use Silex\Application;
use \MonProjet\Service\FlickrService;
use Symfony\Component\HttpFoundation\Request;

class HomeController{
	public function main(Application $app, Request $request){

		// echo $request->query->get('foo');

		return $app['twig']->render('home.twig', array(
			'name'=>"dalton",
			'firstname'=>'joe'
			));
	}
}