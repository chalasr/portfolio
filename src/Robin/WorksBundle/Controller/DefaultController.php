<?php

namespace Robin\WorksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RobinWorksBundle:Default:index.html.twig', array('name' => $name));
    }
}
