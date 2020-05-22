<?php

namespace App\Controller;

use App\Entity\Doctor;
use App\Entity\Pharmacy;
use App\Entity\Laboratory;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountProController extends AbstractController
{
    public function __construct(Doctor $doctor){
        $this->doctor=$doctor;
    }
    /**
     * @Route("/praticien/", name="show_doctor")
     */
    public function index()
    {
        dd($this->doctor);
        return $this->render('main_refmed/account_pro.html.twig', [
        ]);
    }
}
