<?php

namespace App\Controller;

use App\Entity\Drugs;
use App\Entity\PharmacyAvailabeDrugs;
use App\Form\PharmacyAvailabeDrugsType;
use App\Repository\DrugsRepository;
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
    public function index(DrugsRepository $drugsRepository): Response
    {
            $drugs=$drugsRepository->findAll();
            dd($drugs[0]->getPharmacyAvailabeDrugs()->getPharmacy());
            $current_user = $this->getUser();
        return $this->render('pharmacy_availabe_drugs/index.html.twig', [
            'drugs' => $drugsRepository->findAll(),
            'pharmacy' => $current_user,
        ]);
    }

    /**
     * @Route("/repertorie", name="pharmacy_availabe_drugs_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $current_user = $this->getUser();

        $pharmacyAvailabeDrug = new PharmacyAvailabeDrugs();
        $form = $this->createForm(PharmacyAvailabeDrugsType::class, $pharmacyAvailabeDrug);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $pharmacyAvailabeDrug->setPharmacy($current_user);
            $entityManager->persist($pharmacyAvailabeDrug);
            $entityManager->flush();

            return $this->redirectToRoute('pharmacy_availabe_drugs_index');
        }

        return $this->render('pharmacy_availabe_drugs/new.html.twig', [
            'pharmacy_availabe_drug' => $pharmacyAvailabeDrug,
            'pharmacy' => $current_user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pharmacy_availabe_drugs_show", methods={"GET"})
     */
    public function show(Drugs $drugs): Response
    {
        $current_user = $this->getUser();
        return $this->render('pharmacy_availabe_drugs/show.html.twig', [
            'pharmacy' => $current_user,
            'drug' => $drugs,
        ]);
    }

    /**
     * @Route("/rendre_disponible/{id}", name="pharmacy_availabe_drugs_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PharmacyAvailabeDrugs $pharmacyAvailabeDrug): Response
    {
        $current_user = $this->getUser();
        $form = $this->createForm(PharmacyAvailabeDrugsType::class, $pharmacyAvailabeDrug);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pharmacy_availabe_drugs_index');
        }

        return $this->render('pharmacy_availabe_drugs/edit.html.twig', [
            'pharmacy_availabe_drug' => $pharmacyAvailabeDrug,
            'pharmacy' => $current_user,
            'form' => $form->createView(),
        ]);
    }

}
