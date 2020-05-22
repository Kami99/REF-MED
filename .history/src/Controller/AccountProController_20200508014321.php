<?php

namespace App\Controller;

use App\Entity\Doctor;
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
     * @Route("/praticien/{slug}", name="show_doctor", requirements={"slug": "[a-z0-9\-]*"})
     */
    public function index(Doctor $doctor)
    {
        dd($doctor);
        return $this->render('/index.html.twig', [
            'controller_name' => 'AccountProController',
        ]);
    }
}
