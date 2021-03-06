<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Doctor;
use App\Repository\DoctorRepository;
use App\Repository\PharmacyRepository;
use App\Repository\LaboratoryRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountProController extends AbstractController
{


    public function __construct(){

    }
    /**
     * @Route("/praticien/{slug}", name="show_doctor")
     */
    public function showAccountDoctor(Doctor $doctor)
    {
        
        return $this->render('main_refmed/account_pro.html.twig', [
            'doctor'=>$doctor, 
        ]);
    }

    public function showAccountPharmarcy(Doctor $doctor)
    {
        
        return $this->render('main_refmed/account_pro.html.twig', [
            'doctor'=>$doctor, 
        ]);
    }

    public function showAccountLaboratory(Doctor $doctor)
    {
        return $this->render('main_refmed/account_pro.html.twig', [
            'doctor'=>$doctor, 
        ]);
    }
}
