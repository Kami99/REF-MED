<?php

namespace App\EventSubscriber;

use CalendarBundle\Entity\Event;
use CalendarBundle\CalendarEvents;
use CalendarBundle\Event\CalendarEvent;
use App\Repository\AppointmentRepository;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class AppointmentSubscriber implements EventSubscriberInterface
{
    private $appointmentRepository;
    private $router;
    private $tokenStorage;

    public function __construct(
        AppointmentRepository $appointmentRepository,
        UrlGeneratorInterface $router,
        TokenStorageInterface $tokenStorage
    ) {
        $this->appointmentRepository = $appointmentRepository;
        $this->router = $router;
        $this->tokenStorage = $tokenStorage;
    }

    public static function getSubscribedEvents()
    {
        return [
            CalendarEvents::SET_DATA => 'onCalendarSetData',
        ];
    }

    public function onCalendarSetData(CalendarEvent $calendar)
    {
        $start = $calendar->getStart();
        $end = $calendar->getEnd();
        $filters = $calendar->getFilters();
        $user = $this->tokenStorage->getToken()->getUser();

        // Modify the query to fit to your entity and needs
        // Change appointment.beginAt by your start date property
        $appointments = $this->appointmentRepository->findConfirmedAppointments($user, $calendar, true);

        foreach ($appointments as $appointment) {
            // this create the events with your data (here appointment data) to fill calendar
            if ( $appointment->getDaysOfWeek()==null) {
            $appointmentEvent = new Event(
                $appointment->getTitle(),
                $appointment->getAppointmentType(),
                $appointment->getDoctors(),
                $appointment->getBeginAt(),
                 // If the end date is null or not defined, a all day event is created.                
                // If the end date is null or not defined, a all day event is created.
            );
        }
        else {
            $appointmentEvent = new Event(
                $appointment->getTitle(),
                $appointment->getAppointmentType(),
                $appointment->getDoctors(),
                $appointment->getBeginAt(),
                $appointment->getEndAt(),
                $appointment->getDaysOfWeek(),                            
                // If the end date is null or not defined, a all day event is created.
            );        }
            /*
             * Add custom options to events
             *
             * For more information see: https://fullcalendar.io/docs/event-object
             * and: https://github.com/fullcalendar/fullcalendar/blob/master/src/core/options.ts
             */

            $appointmentEvent->setOptions([
                'backgroundColor' => '#73c991',
                'borderColor' => '#ce6700',
            ]);
            $appointmentEvent->addOption(
                'url',
                $this->router->generate('appointment_show', [
                    'id' => $appointment->getId(),
                ])
            );

            // finally, add the event to the CalendarEvent to fill the calendar
            $calendar->addEvent($appointmentEvent);
        }
    }
}