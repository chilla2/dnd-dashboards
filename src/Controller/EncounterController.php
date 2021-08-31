<?php

namespace App\Controller;

use App\Entity\Encounter;
use App\Form\EncounterType;
use App\Form\CombatTrackerType;
use App\Repository\EncounterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/encounter")
 */
class EncounterController extends AbstractController
{
    /**
     * @Route("/", name="encounter_index", methods={"GET"})
     */
    public function index(EncounterRepository $encounterRepository): Response
    {
        return $this->render('encounter/index.html.twig', [
            'encounters' => $encounterRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="encounter_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $encounter = new Encounter();
        $newEncounterForm = $this->createForm(EncounterType::class, $encounter);
        $newEncounterForm->handleRequest($request);

        if ($newEncounterForm->isSubmitted() && $newEncounterForm->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $encounter->setFighters($encounter->getFighters());
            $entityManager->persist($encounter);
            $entityManager->flush();

            return $this->redirectToRoute('encounter_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('encounter/new.html.twig', [
            'encounter' => $encounter,
            'newEncounterForm' => $newEncounterForm,
        ]);
    }

    /**
     * @Route("/{id}", name="encounter_show", methods={"GET"})
     */
    public function show(Encounter $encounter): Response
    {
        return $this->render('encounter/show.html.twig', [
            'encounter' => $encounter,
        ]);
    }

    /**
     * @Route("/{id}/add-fighters", name="encounter_add_fighters", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function addFighters(Encounter $encounter, Request $request): Response
    {
        $editEncounterForm = $this->createForm(EncounterType::class, $encounter);
        $editEncounterForm->handleRequest($request);
        $id = $encounter->getId();

        if ($editEncounterForm->isSubmitted() && $editEncounterForm->isValid()) {
            $encounter->setFighters($encounter->getFighters());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($encounter);
            $entityManager->flush();

            return $this->redirectToRoute('combat_tracker_edit', ['id' => $id], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('encounter/add.html.twig', [
            'encounter' => $encounter,
            'editEncounterForm' => $editEncounterForm,
        ]);
    }

    /**
     * @Route("/{id}/edit-combat", name="combat_tracker_edit", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function editCombat(Request $request, Encounter $encounter): Response
    {

        $editCombatForm = $this->createForm(CombatTrackerType::class, $encounter);
        $editCombatForm->handleRequest($request);
        $id = $encounter->getId();

        if ($editCombatForm->isSubmitted() && $editCombatForm->isValid() && $this->isCsrfTokenValid('edit-combat'.$encounter->getId(), $request->request->get('token'))) {
            $encounter->setFighters($encounter->getFighters());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($encounter);
            $entityManager()->flush();

            return $this->redirectToRoute('player_display_control', ['id' => $id], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('encounter/edit.html.twig', [
            'encounter' => $encounter,
            'editCombatForm' => $editCombatForm,
        ]);
    }

    /**
     * @Route("/{id}", name="encounter_delete", methods={"POST"})
     * @param Request $request
     */
    public function delete(Request $request, Encounter $encounter): Response
    {
        if ($this->isCsrfTokenValid('delete'.$encounter->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($encounter);
            $entityManager->flush();
        }

        return $this->redirectToRoute('encounter_index', [], Response::HTTP_SEE_OTHER);
    }
}
