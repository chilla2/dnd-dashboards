<?php

namespace App\Controller;

use App\Entity\Location;
use App\Form\LocationType;
use App\Repository\LocationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/location")
 */
class LocationController extends AbstractController
{
    /**
     * @Route("/", name="location_index", methods={"GET"})
     */
    public function index(LocationRepository $locationRepository): Response
    {
        return $this->render('location/index.html.twig', [
            'locations' => $locationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="location_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $location = new Location();
        $newLocationForm = $this->createForm(LocationType::class, $location);
        $newLocationForm->handleRequest($request);

        if ($newLocationForm->isSubmitted() && $newLocationForm->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($location);
            $entityManager->flush();

            return $this->redirectToRoute('location_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('location/new.html.twig', [
            'location' => $location,
            'newLocationForm' => $newLocationForm,
        ]);
    }

    /**
     * @Route("/{id}", name="location_show", methods={"GET"})
     */
    public function show(Location $location): Response
    {
        return $this->render('location/show.html.twig', [
            'location' => $location,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="location_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Location $location): Response
    {
        $editLocationForm = $this->createForm(LocationType::class, $location);
        $editLocationForm->handleRequest($request);

        if ($editLocationForm->isSubmitted() && $editLocationForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('location_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('location/edit.html.twig', [
            'location' => $location,
            'editLocationForm' => $editLocationForm,
        ]);
    }

    /**
     * @Route("/{id}", name="location_delete", methods={"POST"})
     */
    public function delete(Request $request, Location $location): Response
    {
        if ($this->isCsrfTokenValid('delete'.$location->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($location);
            $entityManager->flush();
        }

        return $this->redirectToRoute('location_index', [], Response::HTTP_SEE_OTHER);
    }
}
