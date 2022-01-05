<?php

namespace App\Controller;

use App\Entity\Project;

use App\Repository\ProjectRepository;
use App\Repository\UserRepository;

use Doctrine\Persistence\ManagerRegistry;

use Psr\Log\LoggerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/projects", name="projects")
     */
    public function index(ProjectRepository $projectRepository): Response
    {
        $projects = $projectRepository->findAll();

        return $this->render('projects/index.html.twig', [
            'projects' => $projects,
        ]);
    }

}