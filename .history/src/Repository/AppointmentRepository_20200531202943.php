<?php

namespace App\Repository;

use App\Entity\Appointment;
use CalendarBundle\Event\CalendarEvent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method Appointment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Appointment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Appointment[]    findAll()
 * @method Appointment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppointmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Appointment::class);
    }

    // /**
    //  * @return Appointment[] Returns an array of Appointment objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
        */

    public function findAllConfirmedAppoint(UserInterface $user, $confirm=false)
    {
            return $this->createQueryBuilder('a')
            ->join('a.doctors', 'doctor')
            ->where(':user MEMBER OF a.doctors')
            ->andWhere('a.isConfirmed = :confirm')
            ->setParameter('user', $user)
            ->setParameter('confirm', $confirm)
            ->orderBy('a.id', 'DESC')
            ->getQuery()
                // ->andWhere('a.doctors = :user')
                // ->setParameter('a.doctors', $user)
                // ->setMaxResults(10)
                // ->getQuery()
            ->getResult()
            ;
       


    }

    public function findAllAppointment(UserInterface $user)
    {
            return $this->createQueryBuilder('a')
            ->join('a.doctors', 'doctor')
            ->where(':user MEMBER OF a.doctors')
            ->setParameter('user', $user)
            ->orderBy('a.id', 'DESC')
            ->getQuery()
            ->getResult()
            ;
       


    }

    /*
    public function findOneBySomeField($value): ?Appointment
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findConfirmedAppointments(UserInterface $user, CalendarEvent $calendar, $confirm=false)
    {
          $start = $calendar->getStart();
          $end = $calendar->getEnd();
        return $this->createQueryBuilder('a')
        ->join('a.doctors', 'doctor')
        ->where(':user MEMBER OF a.doctors')
        ->where('appointment.beginAt BETWEEN :start and :end OR appointment.endAt BETWEEN :start and :end')
        ->andWhere('a.isConfirmed = :confirm')
        ->setParameter('user', $user)
        ->setParameter('start', $start->format('Y-m-d H:i:s'))
        ->setParameter('end', $end->format('Y-m-d H:i:s'))
        ->setParameter('confirm', $confirm)
        ->getQuery()
            // ->andWhere('a.doctors = :user')
            // ->setParameter('a.doctors', $user)
            // ->setMaxResults(10)
            // ->getQuery()
        ->getResult()
        ;

        // $user=$token->getToken()->getUser();
        // $start = $calendar->getStart();
        // $end = $calendar->getEnd();
        // return $this->createQueryBuilder('appointment')
        // ->where('appointment.beginAt BETWEEN :start and :end OR appointment.endAt BETWEEN :start and :end')
        // ->andWhere('appointment.isConfirmed = TRUE')
        // ->andWhere('appointment.doctors = :user')
        // ->setParameter('start', $start->format('Y-m-d H:i:s'))
        // ->setParameter('end', $end->format('Y-m-d H:i:s'))
        // ->setParameter('user', $user)
        // ->getQuery()
        // ->getResult();
    }
}
