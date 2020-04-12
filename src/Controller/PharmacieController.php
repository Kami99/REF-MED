<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PharmacieController extends AbstractController
{
    /**
     * @Route("/pharmacie", name="pharmacie")
     */
    public function index()
    {
        return $this->render('pharmacie/index.html.twig', [
            'controller_name' => 'PharmacieController',
        ]);
    }
}
