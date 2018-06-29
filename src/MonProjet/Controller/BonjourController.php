<?php

namespace MonProjet\Controller;
use Silex\Application;

class BonjourController {

	public function main(Application $app) {

		return $app['twig']->render('bonjour.twig', array(
			'name'=>"dalton",
			'firstname'=>'William'
			));
	}
}