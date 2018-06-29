<?php

namespace MonProjet\Controller;
use Silex\Application;

class FlickrController {

	public function main(Application $app) {

		return $app['twig']->render('flickr.twig', array(
			'name'=>"dalton",
			'firstname'=>'Averell'
			));
	}
}