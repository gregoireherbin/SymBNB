<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller {

	/**
	 * @Route("/",name="homepage")
	 */

	public function home(){

		return $this->render('home.html.twig');
	}

}

?>