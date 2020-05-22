<?php

namespace App\Controller;

use App\Entity\Doctor;
use App\Entity\Pharmacy;
use App\Entity\Laboratory;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountProController extends AbstractController
{
    public function __construct(Doctor $doctor, Laboratory $laboratory, Pharmacy $pharmacy){
        $this->doctor=$doctor;
        $this->pharmacy=$pharmacy;
        $this->laboratory=$laboratory;
    }
    /**
     * @Route("/praticien/", name="show_doctor")
     */
    public function index()
    {
        dd($doctor);
        return $this->render('main_refmed/account_pro.html.twig', [
        ]);
    }
}
