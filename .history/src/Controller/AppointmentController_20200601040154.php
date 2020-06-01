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
     * @Route("/rdv-non-confirme", name="appointment_unconfirmed", methods={"GET"})
     */
    public function unconfirmedAppoint(AppointmentRepository $appointmentRepository): Response
    {
        $current_doctor = $this->getUser();
        $appointments=$appointmentRepository->findAllConfirmedAppoint($current_doctor);

        return $this->render('appointment/unconfirmed_appointment.html.twig', [
            'appointments' => $appointments,
            'doctor' => $current_doctor,

        ]);
    }

    /**
     * @Route("/agenda", name="appointment_calendar", methods={"GET"})
     */
    public function calendar(): Response
    {
        $current_doctor = $this->getUser();
        return $this->render('appointment/calendar.html.twig', [
            'doctor' => $current_doctor,

        ]);


    }

        /**
     * @Route("/-{id}", name="appointment_show")
     */
    public function showAppointment(Appointment $appointment)
    {
        
        return $this->render('appointment/show.html.twig', [
            'appointment' => $appointment,
        ]);
    }
    /**
     * @Route("/tous-mes-rdv", name="appointment_list", methods={"GET"})
     */
    public function listAppoint( AppointmentRepository $appointmentRepository): Response
    {
        $current_doctor = $this->getUser();
        $appointments=$appointmentRepository->findAllAppointment($current_doctor);

        return $this->render('appointment/list_appointment.html.twig', [
            'appointments' => $appointments,
            'doctor' => $current_doctor,
        ]);
    }


     /**
     * @Route("/modifier/{id}", name="appointment.edit", methods={"GET","POST"})
     */
    public function editAppointment(Request $request, AppointmentRepository $appointmentRepository,  Appointment $appointment): Response
    {
        $current_doctor = $this->getUser();
        $appointments=$appointmentRepository->findAllAppointment($current_doctor);

        $form_edit = $this->createForm(ManageAppointmentType::class, $appointment);
        $form_edit->handleRequest($request);

        if ($form_edit->isSubmitted() && $form_edit->isValid()) {
            $data=$form_edit->getData(); 
            $date= $data->getBeginAt();
            $convertData = $date->format('Y-m-d H:i:s');
            $endAt = new \DateTime($convertData);
            $endAt=$endAt->add(new \DateInterval('PT1H'));
            $appointment->setEndAt($endAt);
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash(
                'success',
                "Ce rendez vous a été modifier"
            );
            return $this->redirectToRoute('appointment_list');
        }


        return $this->render('appointment/edit_appointment.html.twig', [
            'appointment' => $appointment,
            'form_edit' => $form_edit->createView(),
            'doctor' => $current_doctor,
        ]);
    }




}
