<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrivateDashboardController extends AbstractController
{
    /**
     * @Route("/private/dashboard", name="private_dashboard")
     */
    public function index(): Response
    {
        return $this->render('private_dashboard/index.html.twig', [
            'controller_name' => 'PrivateDashboardController',
        ]);
    }
}
