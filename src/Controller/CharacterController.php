<?php

namespace App\Controller;

use App\Entity\Character;
use App\Form\CharacterType;
use App\Repository\CharacterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/character")
 */
class CharacterController extends AbstractController
{
    /**
     * @Route("/", name="character_index", methods={"GET"})
     */
    public function index(CharacterRepository $characterRepository): Response
    {
        return $this->render('character/index.html.twig', [
            'characters' => $characterRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="character_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $character = new Character();
        $newCharacterForm = $this->createForm(CharacterType::class, $character);
        $newCharacterForm->handleRequest($request);

        if ($newCharacterForm->isSubmitted() && $newCharacterForm->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($character);
            $entityManager->flush();

            return $this->redirectToRoute('character_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('character/new.html.twig', [
            'character' => $character,
            'newCharacterForm' => $newCharacterForm,
        ]);
    }

    /**
     * @Route("/{id}", name="character_show", methods={"GET"})
     */
    public function show(Character $character): Response
    {
        return $this->render('character/show.html.twig', [
            'character' => $character,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="character_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Character $character): Response
    {
        $editCharacterForm = $this->createForm(CharacterType::class, $character);
        $editCharacterForm->handleRequest($request);

        if ($editCharacterForm->isSubmitted() && $editCharacterForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('character_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('character/edit.html.twig', [
            'character' => $character,
            'editCharacterForm' => $editCharacterForm,
        ]);
    }

    /**
     * @Route("/{id}", name="character_delete", methods={"POST"})
     */
    public function delete(Request $request, Character $character): Response
    {
        if ($this->isCsrfTokenValid('delete'.$character->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($character);
            $entityManager->flush();
        }

        return $this->redirectToRoute('character_index', [], Response::HTTP_SEE_OTHER);
    }
}
