<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/tableau_bord', name: 'app_dashboard')]
    public function index(): Response
    {

        return $this->render('app/dashboard.html.twig', [
        ]);
    }
}
