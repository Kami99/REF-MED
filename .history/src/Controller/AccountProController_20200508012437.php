<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccountProController extends AbstractController
{
    /**
     * @Route("/praticien/p", name="show_doctor")
     */
    public function index()
    {
        return $this->render('account_pro/index.html.twig', [
            'controller_name' => 'AccountProController',
        ]);
    }
}
