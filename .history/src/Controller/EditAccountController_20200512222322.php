<?php

namespace App\Controller;

use App\Entity\Doctor;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class EditAccountController extends AbstractController
{
    /**
     * @Route("/edit/account/", name="edit_account")
     * @IsGranted("ROLE_USER_DOCTOR")
     * 
     */
    public function index()
    {
        
        $doctor=$this->getUser();
        $form = $this->createForm(EditDoctorType::class, $doctor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pharmacy);
            $entityManager->flush();

            // do anything else you need here, like send an email

            return $guardHandler->authenticateUserAndHandleSuccess(
                $pharmacy,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );
        }

        return $this->render('edit_account/main_edit.html.twig', [
            'doctor' => $doctor,
        ]);
    }
}
