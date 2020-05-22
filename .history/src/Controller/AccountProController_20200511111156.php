<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Doctor;
use App\Entity\Pharmacy;
use App\Entity\Laboratory;
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
     /**
     * @Route("/pharmacy/{slug}", name="show_pharmacy")
     */

    public function showAccountPharmarcy(Pharmacy $pharmacy)
    {
        
        return $this->render('main_refmed/show_account_doctor.html.twig', [
            'pharmacy'=>$pharmacy, 
        ]);
    }
    /**
     * @Route("/laboratoire/{slug}", name="show_laboratoire")
     */
    public function showAccountLaboratory(Laboratory $laboratory)
    {
        return $this->render('main_refmed/account_pro.html.twig', [
            'laboratory'=>$laboratory, 
        ]);
    }
}
