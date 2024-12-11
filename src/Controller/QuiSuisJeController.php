<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\UserRepository;

class QuiSuisJeController extends AbstractController
{
    public function index(UserRepository $userRepository): Response
    {
        $user = $userRepository->find(1); // Supposons que l'utilisateur principal a l'ID 1.
        return $this->render('qui_suis_je/index.html.twig', [
            'user' => $user,
        ]);
    }
}

