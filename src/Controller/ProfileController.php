<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/Profile', name: 'app_profile')]
    public function index(): Response
    {
        return $this->render('Admin/profile.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
}
