<?php

namespace App\Controller;

use App\Entity\Npc;
use App\Form\NpcType;
use App\Repository\NpcRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * @Route("/npc")
 */
class NpcController extends AbstractController
{
    /**
     * @Route("/", name="npc_index", methods={"GET"})
     */
    public function index(NpcRepository $npcRepository): Response
    {
        return $this->render('npc/index.html.twig', [
            'npcs' => $npcRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="npc_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $npc = new Npc();
        $newNpcForm = $this->createForm(NpcType::class, $npc);
        $newNpcForm->handleRequest($request);

        if ($newNpcForm->isSubmitted() && $newNpcForm->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($npc);
            $entityManager->flush();

            return $this->redirectToRoute('npc_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('npc/new.html.twig', [
            'npc' => $npc,
            'newNpcForm' => $newNpcForm,
        ]);
    }

    /**
     * @Route("/{id}", name="npc_show", methods={"GET"})
     */
    public function show(Npc $npc): Response
    {
        return $this->render('npc/show.html.twig', [
            'npc' => $npc,
        ]);
    }

    public function showPlayers(id $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $npc = $entityManager->getRepository(Npc::class)->find($id);

        if ($npc.showPlayers == TRUE) {
            $npc->setShowPlayers(FALSE);
        } else {
            $npc->setShowPlayers(TRUE);
        }
        $entityManager->flush();

    }

    /**
     * @Route("/{id}/edit", name="npc_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Npc $npc): Response
    {
        $editNpcForm = $this->createForm(NpcType::class, $npc);
        $editNpcForm->handleRequest($request);

        if ($editNpcForm->isSubmitted() && $editNpcForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('npc_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('npc/edit.html.twig', [
            'npc' => $npc,
            'editNpcForm' => $editNpcForm,
        ]);
    }

    /**
     * @Route("/{id}", name="npc_delete", methods={"POST"})
     */
    public function delete(Request $request, Npc $npc): Response
    {
        if ($this->isCsrfTokenValid('delete'.$npc->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($npc);
            $entityManager->flush();
        }

        return $this->redirectToRoute('npc_index', [], Response::HTTP_SEE_OTHER);
    }
}
