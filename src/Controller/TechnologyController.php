<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\TechnologyRepository;

class TechnologyController extends AbstractController
{
    public function index(TechnologyRepository $technologyRepository): Response
    {
        $technologies = $technologyRepository->findAll();
        return $this->render('technology/index.html.twig', [
            'technologies' => $technologies,
        ]);
    }
}
