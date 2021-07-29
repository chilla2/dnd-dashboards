<?php

namespace App\Controller;

use App\Entity\Creature;
use App\Form\CreatureType;
use App\Repository\CreatureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/creature")
 */
class CreatureController extends AbstractController
{
    /**
     * @Route("/", name="creature_index", methods={"GET"})
     */
    public function index(CreatureRepository $creatureRepository): Response
    {
        return $this->render('creature/index.html.twig', [
            'creatures' => $creatureRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="creature_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $creature = new Creature();
        $form = $this->createForm(CreatureType::class, $creature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($creature);
            $entityManager->flush();

            return $this->redirectToRoute('creature_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('creature/new.html.twig', [
            'creature' => $creature,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="creature_show", methods={"GET"})
     */
    public function show(Creature $creature): Response
    {
        return $this->render('creature/show.html.twig', [
            'creature' => $creature,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="creature_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Creature $creature): Response
    {
        $form = $this->createForm(CreatureType::class, $creature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('creature_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('creature/edit.html.twig', [
            'creature' => $creature,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="creature_delete", methods={"POST"})
     */
    public function delete(Request $request, Creature $creature): Response
    {
        if ($this->isCsrfTokenValid('delete'.$creature->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($creature);
            $entityManager->flush();
        }

        return $this->redirectToRoute('creature_index', [], Response::HTTP_SEE_OTHER);
    }
}
