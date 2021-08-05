<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Mapping as ORM;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class PrivateDashboardController extends AbstractController
{
    private $twig;
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
        $this->twig->addFunction(new \Twig\TwigFunction('showPlayers', 'showPlayers'));
    }

    /**
     * @Route("/dm-screen", name="private_dashboard")
     */
    public function index(): Response
    {
        return $this->render('private_dashboard/index.html.twig');
    }

    /**
     * @Route("/{object}/{id}/show-dm", name="show_dm", methods={"GET"})
     * @param String $object
     * @param String $id
     * @param Request $request
     * @return Response
     */
    public function showDm(String $object, String $id, Request $request): Response
    {
        $entity = ucfirst(strtolower($object));
        $repository = $this->getDoctrine()->getRepository('App\Entity\\' . ucfirst($entity));
        $entityManager = $this->getDoctrine()->getManager();
        $item = $repository
            ->find($id);
        if ($item->getShowDm() == TRUE) {
            $item->setShowDm(FALSE);
        } else {
            $item->setShowDm(TRUE);
        }
        $entityManager->persist($item);
        $entityManager->flush();
        return $this->redirectToRoute('private_dashboard');
    }

    /**
     * @Route("/{object}/{id}/show-players", name="show_players", methods={"GET"})
     * @param String $object
     * @param String $id
     * @param Request $request
     * @return Response
     */
    public function showPlayers(String $object, String $id, Request $request): Response
    {
        $entity = ucfirst(strtolower($object));
        $repository = $this->getDoctrine()->getRepository('App\Entity\\' . ucfirst($entity));
        $entityManager = $this->getDoctrine()->getManager();
        $item = $repository
            ->find($id);
        if ($item->getShowPlayers() == TRUE) {
            $item->setShowPlayers(FALSE);
        } else {
            $item->setShowPlayers(TRUE);
        }
        $entityManager->persist($item);
        $entityManager->flush();
        return $this->redirectToRoute('private_dashboard');
    }
}
