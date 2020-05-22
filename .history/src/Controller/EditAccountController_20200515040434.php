<?php

namespace App\Controller;

use App\Entity\Doctor;
use App\Entity\PasswordUpdate;
use App\Form\EditDoctorType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EditAccountController extends AbstractController
{

    public function __construct(){
    }

    /**
     * @Route("/edit/account/", name="edit_account")
     * @IsGranted("ROLE_USER_DOCTOR")
     * 
     */
    public function index(Request $request)
    {
        
        $doctor=$this->getUser();
        $passwordUpdate=new PasswordUpdate();
        $form = $this->createForm(EditDoctorType::class, $doctor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($doctor);
            $entityManager->flush();

        }
        return $this->render('edit_account/main_edit.html.twig', [
            'form' => $form->createView(),
            'doctor' => $doctor,
        ]);
    }
}
