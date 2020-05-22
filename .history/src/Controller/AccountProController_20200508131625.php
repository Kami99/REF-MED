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
    public function index(Doctor $doctors)
    {
        
        return $this->render('main_refmed/account_pro.html.twig', [
            'doctor'=>$doctor, 
        ]);
    }
}
