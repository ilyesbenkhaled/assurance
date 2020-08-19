<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        
    	$articles = $em->getRepository("AssuranceFrontBundle:Article")->findAll();
        return $this->render('UserBundle:Default:auto.html.twig', array('articles' => $articles));
    }
}
