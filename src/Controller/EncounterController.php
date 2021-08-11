<?php

namespace App\Controller;

use App\Entity\Encounter;
use App\Form\EncounterType;
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
        $form = $this->createForm(EncounterType::class, $encounter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($encounter);
            $entityManager->flush();

            return $this->redirectToRoute('encounter_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('encounter/new.html.twig', [
            'encounter' => $encounter,
            'form' => $form,
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
     * @Route("/{id}/edit", name="encounter_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Encounter $encounter): Response
    {
        $form = $this->createForm(EncounterType::class, $encounter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('encounter_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('encounter/edit.html.twig', [
            'encounter' => $encounter,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="encounter_delete", methods={"POST"})
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
