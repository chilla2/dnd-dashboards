<?php

namespace App\Controller;

use App\Entity\Dash;
use App\Form\DashType;
use App\Repository\DashRepository;
use App\Form\GameType;
use App\Entity\Game;
use App\Repository\GameRepository;
use Symfony\Component\Form\FormView;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Entity\File as EmbeddedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * @Route("/dash")
 */
class DashController extends AbstractController
{
    /**
     * @Route("/", name="homepage, methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('dash/index.html.twig');

    }

    /**
     * @Route("/player-display", name="player_display", methods={"GET"})
     */
    public function playerDisplay(): Response
    {
        return $this->render('dash/player_display.html.twig');
    }

    /**
     * @Route("/player-display-control", name="player_display_control", methods={"GET","POST"})
     */
    public function playerDisplayControl(Request $request): Response
    {
        return $this->render('dash/player_display_control.html.twig');
    }

    /**
     * @Route("/player-display-control/combat-mode", name="combat_mode", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function combatMode(Request $request): Response
    {
        $game = $this->getDoctrine()->getRepository('App\Entity\Game')->findOneBy(['name' => 'current']);
        $entityManager = $this->getDoctrine()->getManager();
        if ($game->getCombatMode() == TRUE) {
            $game->setCombatMode(FALSE);
            $entityManager->persist($game);
            $entityManager->flush();
            return $this->redirectToRoute('player_display_control');
        } else {
            $game->setCombatMode(TRUE);
            $entityManager->persist($game);
            $entityManager->flush();
            return $this->redirectToRoute('encounter_add_fighters', ['id' => '1']);
        }
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
     * @Route("/player-display-control/hide-all-dm", name="dm_hide_all", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function hideAllDm(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $npcs = $entityManager->getRepository('App\Entity\Npc')->findAll();
        $creatures = $entityManager->getRepository('App\Entity\Creature')->findAll();
        $locations = $entityManager->getRepository('App\Entity\Location')->findAll();
        $items = $entityManager->getRepository('App\Entity\Item')->findAll();
        $others = $entityManager->getRepository('App\Entity\Other')->findAll();
        foreach ($npcs as $npc) {
          $npc->setShowDm(FALSE);
        }
        foreach ($creatures as $creature) {
          $creature->setShowDm(FALSE);
        }
        foreach ($locations as $location) {
          $location->setShowDm(FALSE);
        }
        foreach ($items as $item) {
          $item->setShowDm(FALSE);
        }
        foreach ($others as $other) {
          $other->setShowDm(FALSE);
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
     * @Route("/player-display-control/{object}/{id}/toggle-dm", name="dm_display_show", methods={"GET"})
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
        return $this->redirectToRoute('player_display_control');
    }

    /**
     * @Route("/new", name="dash_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $dash = new Dash();
        $newDashForm = $this->createForm(DashType::class, $dash);
        $newDashForm->handleRequest($request);

        if ($newDashForm->isSubmitted() && $newDashForm->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($dash);
            $entityManager->flush();

            return $this->redirectToRoute('dash_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dash/new.html.twig', [
            'dash' => $dash,
            'newDashForm' => $newDashForm,
        ]);
    }

    /**
     * @Route("/{id}", name="dash_show", methods={"GET"})
     */
    public function show(Dash $dash): Response
    {
        return $this->render('dash/show.html.twig', [
            'dash' => $dash,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="dash_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Dash $dash): Response
    {
        $editDashForm = $this->createForm(DashType::class, $dash);
        $editDashForm->handleRequest($request);

        if ($editDashForm->isSubmitted() && $editDashForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dash_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dash/edit.html.twig', [
            'dash' => $dash,
            'editDashForm' => $editDashForm,
        ]);
    }

    /**
     * @Route("/{id}", name="dash_delete", methods={"POST"})
     */
    public function delete(Request $request, Dash $dash): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dash->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($dash);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dash_index', [], Response::HTTP_SEE_OTHER);
    }
}
