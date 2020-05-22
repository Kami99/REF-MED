<?php

namespace App\Controller;

use App\Entity\Doctor;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EditAccountController extends AbstractController
{
    /**
     * @Route("/edit/account/{slug}", name="edit_account")
     */
    public function index(Doctor $doctor)
    {
        
        $user->getUser();
        return $this->render('edit_account/main_edit.html.twig', [
            'doctor' => $doctor,
        ]);
    }
}
