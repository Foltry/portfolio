<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\CompetenceRepository;

class CompetenceController extends AbstractController
{
    public function index(CompetenceRepository $competenceRepository): Response
    {
        $competences = $competenceRepository->findAll();
        return $this->render('competence/index.html.twig', [
            'competences' => $competences,
        ]);
    }
}
