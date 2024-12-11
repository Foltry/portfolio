<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ExperienceRepository;

class CvController extends AbstractController
{
    public function index(ExperienceRepository $experienceRepository): Response
    {
        $experiences = $experienceRepository->findAll();
        return $this->render('cv/index.html.twig', [
            'experiences' => $experiences,
        ]);
    }

    public function show(int $id, ExperienceRepository $experienceRepository): Response
    {
        $experience = $experienceRepository->find($id);
        return $this->render('cv/show.html.twig', [
            'experience' => $experience,
        ]);
    }
}

