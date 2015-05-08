<?php

namespace Robin\PortfolioBundle\Controller;

use Robin\PortfolioBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProjectController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('PortfolioBundle:Project');

        $listProjects = $repository->findAll();

        return $this->render('PortfolioBundle:Project:index.html.twig', [
            'listProjects' => $listProjects,
        ]);
    }

    public function viewAction($id)
    {
        $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('PortfolioBundle:Project');

        $project = $repository->find($id);
        if (null === $project) {
            throw new NotFoundHttpException("Il n'existe pas de projets ayant l'id numéro ".$id.'.');
        }

        return $this->render('PortfolioBundle:Project:view.html.twig', [
            'project' => $project,
        ]);
    }

    public function addAction(Request $request)
    {
        $project = new Project();
        $project->setName('Recherche développeur Symfony2.');
        $project->setDescription('Robin');
        $project->setOutils('Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…');
        $project->setClass('class');

        $em = $this->getDoctrine()->getManager();
        $projectRepository = $em->getRepository('PortfolioBundle:Project');

        $em->persist($project);

        // Étape 2 : On « flush » tout ce qui a été persisté avant
        $em->flush();
    }
}
