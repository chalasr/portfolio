<?php

namespace Robin\PortfolioBundle\Controller;

<<<<<<< HEAD
=======
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
>>>>>>> bef2e3058a49fb67f969bb94f553ce20b04eb95a
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
<<<<<<< HEAD
    public function indexAction($name)
    {
        return $this->render('PortfolioBundle:Default:index.html.twig', array('name' => $name));
    }

    public function homeAction()
    {
=======
    public function indexAction($name){
        return $this->render('PortfolioBundle:Default:index.html.twig', array('name' => $name));
    }

    public function homeAction(Request $request){
      if ('POST' === $request->getMethod()){
        // The http request is of type POST
        $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('robin.chalas@gmail.com')
        ->setTo('robin.chalas@epitech.eu')
        ->setBody($this->renderView('PortfolioBundle:Default:email.html.twig'));
        $this->get('mailer')->send($message);
      }

>>>>>>> bef2e3058a49fb67f969bb94f553ce20b04eb95a
        return $this->render('PortfolioBundle:Default:home.html.twig');
    }
}
