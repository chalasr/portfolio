<?php

namespace Robin\PortfolioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name){
        return $this->render('PortfolioBundle:Default:index.html.twig', array('name' => $name));
    }

    public function homeAction(Request $request)
    {
        if ('POST' === $request->getMethod()){
            $params = [];
            $request = Request::createFromGlobals();
            $fields = ['nom', 'prenom', 'email', 'content'];
            foreach($fields as $field){
                $params[$field] = $request->request->get($field);
            }
            $mailBody = $this->renderView('PortfolioBundle:Default:email.html.twig', $params);

            $message = \Swift_Message::newInstance()
              ->setSubject('chalasdev.fr - Contact visiteur')
              ->setFrom($request->request->get('email'))
              ->setTo('robin.chalas@gmail.com')
              ->setBody($mailBody, 'text/html')
              ->setContentType("text/html");

            $this->get('mailer')->send($message);
        }

        return $this->render('PortfolioBundle:Default:home-en.html.twig');
    }

    public function homeFrAction(Request $request)
    {
        if ('POST' === $request->getMethod()){
            $params = [];
            $request = Request::createFromGlobals();
            $fields = ['nom', 'prenom', 'email', 'content'];
            foreach($fields as $field){
                $params[$field] = $request->request->get($field);
            }
            $mailBody = $this->renderView('PortfolioBundle:Default:email.html.twig', $params);

            $message = \Swift_Message::newInstance()
              ->setSubject('chalasdev.fr - Contact visiteur')
              ->setFrom($request->request->get('email'))
              ->setTo('robin.chalas@gmail.com')
              ->setBody($mailBody);

            $this->get('mailer')->send($message);
        }

        return $this->render('PortfolioBundle:Default:home.html.twig');
    }
}
