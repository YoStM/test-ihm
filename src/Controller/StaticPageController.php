<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticPageController extends AbstractController
{
    #[Route('/', name: 'app_landing_page')]
    public function landingPage(): Response
    {
        return $this->render('static_page/index.html.twig', []);
    }

    #[Route('/conditions-utilisation', name:'app_terms_conditions')]
    public function termsCondition(): Response
    {
        return $this->render('static_page/terms_condition.html.twig', []);
    }

    #[Route('/faq', name:'app_faq')]
    public function faq(): Response
    {
        return $this->render('static_page/faq.html.twig', []);
    }
}
