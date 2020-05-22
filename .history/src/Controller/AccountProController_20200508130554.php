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
    private $doctor;
    private $laboratory;
    private $pharmacy;

    public function __construct(DoctorRepository $doctor, LaboratoryRepository $laboratory, PharmacyRepository $pharmacy){
        $this->doctor=$doctor;
        $this->laboratory=$laboratory;
        $this->pharmacy=$pharmacy;
       
    }
    /**
     * @Route("/praticien/{slug}", name="show_doctor")
     */
    public function index(Doctor $doctors)
    {
        
        return $this->render('main_refmed/account_pro.html.twig', [
            'doctor'=>$doctors, 
        ]);
    }
}
