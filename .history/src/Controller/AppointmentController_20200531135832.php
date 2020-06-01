<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Form\AppointmentType;
use App\Form\ManageAppointmentType;
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
     * @Route("/rdv-non_confirme", name="appointment_unconfirmed", methods={"GET"})
     */
    public function unconfirmedAppoint(AppointmentRepository $appointmentRepository): Response
    {
        $current_doctor = $this->getUser();
        $appointments=$appointmentRepository->findAllConfirmedAppoint($current_doctor);

        return $this->render('appointment/index.html.twig', [
            'appointments' => $appointments,
            'doctor' => $current_doctor,

        ]);
    }


    /**
     * @Route("/{id}", name="appointment_calendar", methods={"GET"})
     */
    public function calendar(Appointment $appointment): Response
    {
        return $this->render('appointment/show.html.twig', [
            'appointment' => $appointment,
        ]);
    }

    /**
     * @Route("/manage/{id}", name="appointment_edit", methods={"GET","POST"})
     */
    public function manageAppoint(Request $request, AppointmentRepository $appointmentRepository): Response
    {
        $current_doctor = $this->getUser();
        $appointments=$appointmentRepository->findAllAppointment($current_doctor);
        $appointment = new Appointment();
        $form_edit = $this->createForm(ManageAppointmentType::class, $appointment);
        $form_edit->handleRequest($request);

        if ($form_edit->isSubmitted() && $form_edit->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('calendar');
        }


        return $this->render('appointment/edit.html.twig', [
            'appointment' => $appointment,
            'form' => $form_edit->createView(),
            'appointments' => $appointments,
            'doctor' => $current_doctor,
        ]);
    }




}
