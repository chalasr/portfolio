<?php

namespace Robin\PortfolioBundle\Controller;
<<<<<<< HEAD

=======
>>>>>>> github
use Robin\PortfolioBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProjectController extends Controller
{
<<<<<<< HEAD
    public function indexAction()
    {
=======

    public function indexAction(){
>>>>>>> github
        $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('PortfolioBundle:Project');

        $listProjects = $repository->findAll();

        return $this->render('PortfolioBundle:Project:index.html.twig', [
<<<<<<< HEAD
            'listProjects' => $listProjects,
=======
            'listProjects' => $listProjects
>>>>>>> github
        ]);
    }

    public function viewAction($id)
    {
        $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('PortfolioBundle:Project');

        $project = $repository->find($id);
<<<<<<< HEAD
        if (null === $project) {
            throw new NotFoundHttpException("Il n'existe pas de projets ayant l'id numéro ".$id.'.');
        }

        return $this->render('PortfolioBundle:Project:view.html.twig', [
            'project' => $project,
=======
        if (null === $project)
            throw new NotFoundHttpException("Il n'existe pas de projets ayant l'id numéro ".$id.".");

        return $this->render('PortfolioBundle:Project:view.html.twig', [
            'project' => $project
>>>>>>> github
        ]);
    }

    public function addAction(Request $request)
    {
        $project = new Project();
        $project->setName('Recherche développeur Symfony2.');
        $project->setDescription('Robin');
<<<<<<< HEAD
        $project->setOutils('Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…');
        $project->setClass('class');
=======
        $project->setOutils("Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…");
        $project->setClass("class");

>>>>>>> github

        $em = $this->getDoctrine()->getManager();
        $projectRepository = $em->getRepository('PortfolioBundle:Project');

        $em->persist($project);

        // Étape 2 : On « flush » tout ce qui a été persisté avant
        $em->flush();
<<<<<<< HEAD
=======

            // Reste de la méthode qu'on avait déjà écrit
          $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

          return $this->redirect($this->generateUrl('portfolio_view', [
                 'id' => $project->getId()
          ]));

        return $this->render('PortfolioBundle:Project:add.html.twig');
>>>>>>> github
    }
}
