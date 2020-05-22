<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountProController extends AbstractController
{
    private $doctor;
    private $laboratory;
    private $pharmacy;
    
    public function __construct(){
       
    }
    /**
     * @Route("/praticien/", name="show_doctor")
     */
    public function index()
    {
        return $this->render('main_refmed/account_pro.html.twig', [
        ]);
    }
}
