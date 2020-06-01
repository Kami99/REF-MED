<?php

namespace App\EventSubscriber;

use App\Repository\AppointmentRepository;
use CalendarBundle\CalendarEvents;
use CalendarBundle\Entity\Event;
use CalendarBundle\Event\CalendarEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AppointmentSubscriber implements EventSubscriberInterface
{
    private $appointmentRepository;
    private $router;

    public function __construct(
        AppointmentRepository $appointmentRepository,
        UrlGeneratorInterface $router
    ) {
        $this->appointmentRepository = $appointmentRepository;
        $this->router = $router;
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

        // Modify the query to fit to your entity and needs
        // Change appointment.beginAt by your start date property
        $appointments = $this->appointmentRepository
            ->createQueryBuilder('appointment')
            ->where('appointment.beginAt BETWEEN :start and :end OR appointment.endAt BETWEEN :start and :end')
            ->setParameter('start', $start->format('Y-m-d H:i:s'))
            ->setParameter('end', $end->format('Y-m-d H:i:s'))
            ->getQuery()
            ->getResult()
        ;

        foreach ($appointments as $appointment) {
            // this create the events with your data (here appointment data) to fill calendar
            if ( $appointment->getDaysOfWeek()==null) {
            $appointmentEvent = new Event(
                $appointment->getTitle(),
                $appointment->getBeginAt(),
                $appointment->getEndAt(),
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