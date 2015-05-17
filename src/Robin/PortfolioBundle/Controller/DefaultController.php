<?php

namespace Robin\PortfolioBundle\Controller;

<<<<<<< HEAD
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
=======
>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
<<<<<<< HEAD
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

=======
    public function indexAction($name)
    {
        return $this->render('PortfolioBundle:Default:index.html.twig', array('name' => $name));
    }

    public function homeAction()
    {
>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
        return $this->render('PortfolioBundle:Default:home.html.twig');
    }
}
