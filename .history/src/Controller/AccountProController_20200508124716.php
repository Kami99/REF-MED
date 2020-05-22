<?php

namespace App\Controller;

use App\Repository\DoctorRepository;
use App\Repository\PharmacyRepository;
use App\Repository\LaboratoryRepository;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountProController extends AbstractController
{
    private $doctor;
    private $laboratory;
    private $pharmacy;
    private $user;

    public function __construct(DoctorRepository $doctor, LaboratoryRepository $laboratory, PharmacyRepository $pharmacy, User $user){
        $this->doctor=$doctor;
        $this->laboratory=$laboratory;
        $this->pharmacy=$pharmacy;
        $this->user=$user;
       
    }
    /**
     * @Route("/praticien/", name="show_doctor")
     */
    public function index()
    {
        dd($user);
        return $this->render('main_refmed/account_pro.html.twig', [
        ]);
    }
}
