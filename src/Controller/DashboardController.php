<?php

namespace App\Controller;

use App\Entity\Dashboard;
use App\Form\DashboardType;
use App\Repository\DashboardRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Mapping as ORM;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/dashboards")
 */
class DashboardController extends AbstractController
{
    private $twig;
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/", name="dashboard_index", methods={"GET"})
     */
    public function index(DashboardRepository $dashboardRepository): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'dashboards' => $dashboardRepository->findAll(),
        ]);
    }

    /**
     * @Route("/player-display", name="player_display", methods={"GET"})
     */
    public function playerDisplay(): Response
    {
        return $this->render('dashboard/player_display.html.twig');
    }

    /**
     * @Route("/player-display-control", name="player_display_control", methods={"GET"})
     */
    public function playerDisplayControl(): Response
    {
        return $this->render('dashboard/player_display_control.html.twig', [
        ]);
    }

    /**
     * @Route("/player-display-control/combat-mode", name="combat_mode", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function combatMode(Request $request): Response
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
        return $this->redirectToRoute('player_display_control');
    }

    /**
     * @Route("/player-display-control/{object}/{id}/show-hide", name="player_display_show", methods={"GET"})
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
        return $this->redirectToRoute('player_display_control');
    }

    /**
     * @Route("/player-display-control/hide-all", name="player_hide_all", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function hideAll(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $npcs = $entityManager->getRepository('App\Entity\Npc')->findAll();
        $creatures = $entityManager->getRepository('App\Entity\Creature')->findAll();
        $locations = $entityManager->getRepository('App\Entity\Location')->findAll();
        $items = $entityManager->getRepository('App\Entity\Item')->findAll();
        $others = $entityManager->getRepository('App\Entity\Other')->findAll();
        foreach ($npcs as $npc) {
          $npc->setShowPlayers(FALSE);
        }
        foreach ($creatures as $creature) {
          $creature->setShowPlayers(FALSE);
        }
        foreach ($locations as $location) {
          $location->setShowPlayers(FALSE);
        }
        foreach ($items as $item) {
          $item->setShowPlayers(FALSE);
        }
        foreach ($others as $other) {
          $other->setShowPlayers(FALSE);
        }
        $entityManager->persist($item);
        $entityManager->flush();
        return $this->redirectToRoute('player_display_control');
    }

    /**
     * @Route("/new", name="dashboard_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $dashboard = new Dashboard();
        $form = $this->createForm(DashboardType::class, $dashboard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($dashboard);
            $entityManager->flush();

            return $this->redirectToRoute('dashboard_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dashboard/new.html.twig', [
            'dashboard' => $dashboard,
            'form' => $form,
        ]);
    }

}
