<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ProjectRepository;

class ProjectController extends AbstractController
{
    public function index(ProjectRepository $projectRepository): Response
    {
        $project = $projectRepository->find(1); // Supposons qu'il n'y a qu'un projet principal.
        return $this->render('project/index.html.twig', [
            'project' => $project,
        ]);
    }
}
