<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EditAccountController extends AbstractController
{
    /**
     * @Route("/edit/account", name="edit_account")
     */
    public function index()
    {
        return $this->render('edit_account/index.html.twig', [
            'controller_name' => 'EditAccountController',
        ]);
    }
}
