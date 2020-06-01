<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Form\AppointmentType;
use App\Repository\AppointmentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/votre-espace")
 */
class AppointmentController extends AbstractController
{
    /**
     * @Route("/", name="appointment_index", methods={"GET"})
     */
    public function allAppointment(AppointmentRepository $appointmentRepository): Response
    {
        $current_doctor = $this->getUser();
        $appointments=$appointmentRepository->findAllConfirmedAppoint($current_doctor);

        return $this->render('appointment/index.html.twig', [
            'appointments' => $appointments,
            'doctor' => $current_doctor,

        ]);
    }


    /**
     * @Route("/{id}", name="appointment_show", methods={"GET"})
     */
    public function show(Appointment $appointment): Response
    {
        return $this->render('appointment/show.html.twig', [
            'appointment' => $appointment,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="appointment_edit", methods={"GET","POST"})
     */
    public function edit(Request $request): Response
    {
        $appointment = new Appointment();
        $form = $this->createForm(AppointmentType::class, $appointment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('appointment_index');
        }

        return $this->render('appointment/edit.html.twig', [
            'appointment' => $appointment,
            'form' => $form->createView(),
        ]);
    }




}
