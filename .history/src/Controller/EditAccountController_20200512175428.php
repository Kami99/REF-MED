<?php

namespace App\Controller;

use App\Entity\Doctor;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EditAccountController extends AbstractController
{
    /**
     * @Route("/edit/account/", name="edit_account")
     */
    public function index()
    {
        
        $doctor=$this->getUser();
        return $this->render('edit_account/main_edit.html.twig', [
            'doctor' => $doctor,
        ]);
    }
}
