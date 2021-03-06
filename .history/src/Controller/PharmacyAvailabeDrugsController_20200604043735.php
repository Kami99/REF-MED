<?php

namespace App\Controller;

use App\Entity\PharmacyAvailabeDrugs;
use App\Form\PharmacyAvailabeDrugsType;
use App\Repository\PharmacyAvailabeDrugsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pharmacy/availabe/drugs")
 */
class PharmacyAvailabeDrugsController extends AbstractController
{
    /**
     * @Route("/", name="pharmacy_availabe_drugs_index", methods={"GET"})
     */
    public function index(PharmacyAvailabeDrugsRepository $pharmacyAvailabeDrugsRepository): Response
    {
        return $this->render('pharmacy_availabe_drugs/index.html.twig', [
            'pharmacy_availabe_drugs' => $pharmacyAvailabeDrugsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="pharmacy_availabe_drugs_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $pharmacyAvailabeDrug = new PharmacyAvailabeDrugs();
        $form = $this->createForm(PharmacyAvailabeDrugsType::class, $pharmacyAvailabeDrug);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pharmacyAvailabeDrug);
            $entityManager->flush();

            return $this->redirectToRoute('pharmacy_availabe_drugs_index');
        }

        return $this->render('pharmacy_availabe_drugs/new.html.twig', [
            'pharmacy_availabe_drug' => $pharmacyAvailabeDrug,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pharmacy_availabe_drugs_show", methods={"GET"})
     */
    public function show(PharmacyAvailabeDrugs $pharmacyAvailabeDrug): Response
    {
        return $this->render('pharmacy_availabe_drugs/show.html.twig', [
            'pharmacy_availabe_drug' => $pharmacyAvailabeDrug,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pharmacy_availabe_drugs_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PharmacyAvailabeDrugs $pharmacyAvailabeDrug): Response
    {
        $form = $this->createForm(PharmacyAvailabeDrugsType::class, $pharmacyAvailabeDrug);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pharmacy_availabe_drugs_index');
        }

        return $this->render('pharmacy_availabe_drugs/edit.html.twig', [
            'pharmacy_availabe_drug' => $pharmacyAvailabeDrug,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pharmacy_availabe_drugs_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PharmacyAvailabeDrugs $pharmacyAvailabeDrug): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pharmacyAvailabeDrug->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pharmacyAvailabeDrug);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pharmacy_availabe_drugs_index');
    }
}
