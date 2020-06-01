<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Doctor;
use App\Entity\Pharmacy;
use App\Entity\Laboratory;
use App\Entity\Appointment;
use App\Form\AppointmentType;
use App\Repository\DoctorRepository;
use App\Repository\PharmacyRepository;
use App\Repository\LaboratoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountProController extends AbstractController
{


    public function __construct(){

    }
    /**
     * @Route("/praticien/{slug}", name="doctor.show")
     */
    public function showAccountDoctor(Doctor $doctor, Request $request)
    {
        $appointment = new Appointment();
 
        $formAppoint = $this->createForm(AppointmentType::class, $appointment);
        $formAppoint->handleRequest($request);
        if ($formAppoint->isSubmitted() && $formAppoint->isValid()) {
           $data=$formAppoint->getData();     
            $appointment->setIsConfirmed(false);
            $appointment->addDoctor($doctor);
            $title="Nom du Patient: {$data->getName()} raison: {$data->getAppointmentType()->getName()} ";
            $endAt=$data->getBeginAt();
            $appointment->setTitle($title);
            $appointment->setEndAt($data->getBeginAt());
            $appointment->getEndAt()->add(new DateInterval('P1h'));

            dd($appointment);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($appointment);
            $entityManager->flush();

            $this->addFlash(
                'success',
                "Votre rendez a bien été enregistrées veuillez attendre les retours du"
            );
         return $this->redirectToRoute('home');  


        }
            return $this->render('show_account/show_account_doctor.html.twig', [
            'formAppoint' => $formAppoint->createView(),
            'doctor'=>$doctor, 
        ]);
    }
     /**
     * @Route("/pharmacie/{slug}", name="pharmacy.show")
     */

    public function showAccountPharmarcy(Pharmacy $pharmacy)
    {
        
        return $this->render('show_account/show_account_pharmacy.html.twig', [
            'pharmacy'=>$pharmacy, 
        ]);
    }
    /**
     * @Route("/laboratoire/{slug}", name="laboratoire.show")
     */
    public function showAccountLaboratory(Laboratory $laboratory)
    {
        return $this->render('show_account/show_account_laboratory.html.twig', [
            'laboratory'=>$laboratory, 
        ]);
    }
}
