<?php

namespace App\Controller;

use App\Entity\Monster;
use App\Form\MonsterType;
use App\Repository\MonsterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/monster")
 */
class MonsterController extends AbstractController
{
    /**
     * @Route("/", name="monster_index", methods={"GET"})
     */
    public function index(MonsterRepository $monsterRepository): Response
    {
        return $this->render('monster/index.html.twig', [
            'monsters' => $monsterRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="monster_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $monster = new Monster();
        $newMonsterForm = $this->createForm(MonsterType::class, $monster);
        $newMonsterForm->handleRequest($request);

        if ($newMonsterForm->isSubmitted() && $newMonsterForm->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($monster);
            $entityManager->flush();

            return $this->redirectToRoute('monster_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('monster/new.html.twig', [
            'monster' => $monster,
            'newMonsterForm' => $newMonsterForm,
        ]);
    }

    /**
     * @Route("/{id}", name="monster_show", methods={"GET"})
     */
    public function show(Monster $monster): Response
    {
        return $this->render('monster/show.html.twig', [
            'monster' => $monster,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="monster_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Monster $monster): Response
    {
        $editMonsterForm = $this->createForm(MonsterType::class, $monster);
        $editMonsterForm->handleRequest($request);

        if ($editMonsterForm->isSubmitted() && $editMonsterForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('monster_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('monster/edit.html.twig', [
            'monster' => $monster,
            'editMonsterForm' => $editMonsterForm,
        ]);
    }

    /**
     * @Route("/{id}", name="monster_delete", methods={"POST"})
     */
    public function delete(Request $request, Monster $monster): Response
    {
        if ($this->isCsrfTokenValid('delete'.$monster->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($monster);
            $entityManager->flush();
        }

        return $this->redirectToRoute('monster_index', [], Response::HTTP_SEE_OTHER);
    }
}
