<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccountProController extends AbstractController
{
    /**
     * @Route("/praticien/{slug}", name="show_doctor", requirements={"slug": "[a-z0-9\-]*"})
     */
    public function index(D)
    {
        return $this->render('account_pro/index.html.twig', [
            'controller_name' => 'AccountProController',
        ]);
    }
}
