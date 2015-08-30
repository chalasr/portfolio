<?php

namespace Robin\PortfolioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
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

        return $this->render('PortfolioBundle:Default:home-en.html.twig');
    }

    public function homeFrAction(Request $request){
      if ('POST' === $request->getMethod()){
        // The http request is of type POST
        $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('robin.chalas@gmail.com')
        ->setTo('robin.chalas@epitech.eu')
        ->setBody($this->renderView('PortfolioBundle:Default:email.html.twig'));
        $this->get('mailer')->send($message);
      }

        return $this->render('PortfolioBundle:Default:home.html.twig');
    }
}
