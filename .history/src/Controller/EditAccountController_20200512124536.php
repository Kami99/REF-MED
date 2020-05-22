<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EditAccountController extends AbstractController
{
    /**
     * @Route("/edit/account/{slug}", name="edit_account")
     */
    public function index()
    {
        return $this->render('edit_account/main_edit.html.twig', [
            'controller_name' => 'EditAccountController',
        ]);
    }
}
