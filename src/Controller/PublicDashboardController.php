<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicDashboardController extends AbstractController
{
    /**
     * @Route("/public/dashboard", name="public_dashboard")
     */
    public function index(): Response
    {
        return $this->render('public_dashboard/index.html.twig', [
            'controller_name' => 'PublicDashboardController',
        ]);
    }
}
