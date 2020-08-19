<?php

namespace Assurance\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Assurance\FrontBundle\Form\ContactType;
use Assurance\FrontBundle\Entity\Contact;

class DefaultController extends Controller
{
    /**
     * @Route("/" ,name="auto")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        $marques = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Marque')->findAll();
        $kilometrages = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Kilometrage')->findAll();
        $energies = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Energie')->findAll();
        return $this->render('AssuranceFrontBundle:Default:auto.html.twig', array('articles' => $articles, 
            'marques' => $marques, 'kilometrages' => $kilometrages, 'energies' => $energies));
    }

    /**
     * @Route("/get-list-models" ,name="getListModels")
     */
    public function getListModelsAction(Request $request){

        $val = $this->getRequest()->get('get_option');
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Modele');
        $models = $repository->findBy(array('marque' => $val));
        $modelsList = "<option value='0'>--</option>\n";
        foreach($models as $model){
            $modelsList .= "<option value='".$model->getId()."'>".$model->getNom()."</option>\n";
        }
        $response = new Response($modelsList);
        return $response;

    }
	
	 /**
     * @Route("/moto" ,name="moto")
     */
    public function motoAction()
    {
       $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:moto.html.twig', array('articles' => $articles));
    
    }

     /**
     * @Route("/assurance-moto/etape-1" ,name="moto_etape1")
     */
    public function motoEtape1Action()
    {
        return $this->render('AssuranceFrontBundle:Default:moto_etape1.html.twig');
    }

     /**
     * @Route("/assurance-moto/etape-2" ,name="moto_etape2")
     */
    public function motoEtape2Action()
    {
        return $this->render('AssuranceFrontBundle:Default:moto_etape2.html.twig');
    }

     /**
     * @Route("/assurance-moto/etape-3" ,name="moto_etape3")
     */
    public function motoEtape3Action()
    {
        return $this->render('AssuranceFrontBundle:Default:moto_etape3.html.twig');
    }

      /**
     * @Route("/assurance-moto/etape-4" ,name="moto_etape4")
     */
    public function motoEtape4Action()
    {
        return $this->render('AssuranceFrontBundle:Default:moto_etape4.html.twig');
    }

	/**
     * @Route("/habitation" ,name="habitation")
     */
    public function habitationAction()
    {
		$em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:habitation.html.twig', array('articles' => $articles));
        }
	/**
     * @Route("/inscription" ,name="inscription")
     */
	public function inscriptionAction()
    {
        return $this->render('AssuranceFrontBundle:Default:inscription.html.twig');
    }
	/**
     * @Route("/connexion" ,name="connexion")
     */
	public function connexionAction()
    {
        return $this->render('AssuranceFrontBundle:Default:connexion.html.twig');
    }
	/**
     * @Route("/autoassure" ,name="autoassure")
     */
	public function autoassueAction()
    {
		$em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:autoassure.html.twig', array('articles' => $articles));
        }
	/**
     * @Route("/motoassure" ,name="motoassure")
     */
	public function motoassureAction()
    {
		$em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:motoassure.html.twig', array('articles' => $articles));
    }
	/**
     * @Route("/habitationassure" ,name="habitationassure")
     */
	public function habitationassureAction()
    {
		$em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:habitationassure.html.twig', array('articles' => $articles));
    }
	/**
     * @Route("/moncompte" ,name="moncompte")
     */
	public function moncompteAction()
    {
        return $this->render('AssuranceFrontBundle:Default:moncompte.html.twig');
    }
	/**
     * @Route("/acces" ,name="acces")
     */
	public function accesAction()
    {
        return $this->render('AssuranceFrontBundle:Default:acces.html.twig');
    }
	/**
     * @Route("/factures" ,name="factures")
     */
	public function facturesAction()
    {
        return $this->render('AssuranceFrontBundle:Default:factures.html.twig');
    }
	/**
     * @Route("/permis" ,name="permis")
     */
	public function permisAction()
     {
		$em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:permis.html.twig', array('articles' => $articles));
    }
	/**
     * @Route("/assuranceauto" ,name="assuranceauto")
     */
	public function assuranceautoAction()
     {
		$em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:assuranceauto.html.twig', array('articles' => $articles));
    }
	/**
     * @Route("/historiqueauto" ,name="historiqueauto")
     */
	public function historiqueautoAction()
     {
		$em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:historiqueauto.html.twig', array('articles' => $articles));
    }
	/**
     * @Route("/historiquemoto" ,name="historiquemoto")
     */
	public function historiquemotoAction()
     {
		$em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:historiquemoto.html.twig', array('articles' => $articles));
    }
	/**
     * @Route("/assurancemoto" ,name="assurancemoto")
     */
	public function assurancemotoAction()
     {
		$em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:assurancemoto.html.twig', array('articles' => $articles));
    }
	/**
	 * @Route("/assurancehabitation" ,name="assurancehabitation")
     */
	public function assurancehabitationAction()
     {
		$em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:assurancehabitation.html.twig', array('articles' => $articles));
    }
	/**
	 * @Route("/historiquehabitation" ,name="historiquehabitation")
     */
	public function historiquehabitationAction()
     {
		$em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:historiquehabitation.html.twig', array('articles' => $articles));
    }
		/**
	 * @Route("/nous" ,name="nous")
     */
	public function nousAction()
    {
        return $this->render('AssuranceFrontBundle:Default:nous.html.twig');
    }

	/**
	 * @Route("/contactez-nous" ,name="contact")
     */
	public function contactAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm('Assurance\FrontBundle\Form\ContactType',null,array(
            // To set the action use $this->generateUrl('route_identifier')
            'action' => $this->generateUrl('contact'),
            'method' => 'POST'
        ));

        if ($request->getMethod() == 'POST') {
            // Refill the fields in case the form is not valid.
            
            $form->handleRequest($request);

            if($form->isValid()){

                /// get params
                $subject = $form->get('subject')->getData();
                $email = $form->get('email')->getData();
                $name = $form->get('name')->getData();
                $message = $form->get('message')->getData();
                /// save contact entity 
                $contact = new Contact();
                $contact->setName($name);
                $contact->setSubject($subject);
                $contact->setEmail($email);
                $contact->setMessage($message);
                $em->persist($contact);
                $em->flush();

                $message = \Swift_Message::newInstance()
                    ->setSubject($subject)
                    ->setFrom($email)
                    ->setTo('csatunisie9@gmail.com')
                    ->setBody(
                        $this->renderView(
                            'AssuranceFrontBundle:Mail:email.html.twig',
                            array(
                                'ip' => $request->getClientIp(),
                                'name' => $name,
                                'message' => $message
                            )
                        )
                    );

                $this->get('mailer')->send($message);

                $request->getSession()->getFlashBag()->add('success', 'Your email has been sent! Thanks!');

                return $this->redirect($this->generateUrl('contact'));
            }
        }

        return $this->render('AssuranceFrontBundle:Default:cantacte.html.twig', array(
            'form' => $form->createView()
        ));
    }

	/**
	 * @Route("/autoassure2" ,name="autoassure2")
     */
	public function autoassure2Action()
     {
		$em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:autoassure2.html.twig', array('articles' => $articles));
    }
	/**
	 * @Route("/motoassure2" ,name="motoassure2")
     */
	public function motoassure2Action()
    {
 {
		$em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:motoassure2.html.twig', array('articles' => $articles));
    }    }
	/**
	 * @Route("/inscrit" ,name="inscrit")
     */
	public function inscritAction()
    {
        return $this->render('AssuranceFrontBundle:Default:fsetp.html.twig');
    }
	/**
	 * @Route("/habitationassure2" ,name="habitationassure2")
     */
	public function habitationassure2Action()
     {
		$em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');

        $articles = $repository->findAllLatestArticles(8, 0);
        return $this->render('AssuranceFrontBundle:Default:habitationassure2.html.twig', array('articles' => $articles));
    }
	/**
	  * @Route("/article/{id}" ,name="article")
     */
	public function articleAction($id)
	{
    	$repository = $this->getDoctrine()->getRepository('AssuranceFrontBundle:Article');   
      
    	$article = $repository->findOneById($id);
        $articles = $repository->findAllLatestArticles(6, $article->getId());
      
    	return $this->render('AssuranceFrontBundle:Default:article.html.twig', array(
    		'article' => $article,
            'articles' => $articles,
    	));
	
	}

}
