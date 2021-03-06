<?php

namespace App\Controller;

use App\Entity\Doctor;
use App\Form\EditDoctorType;
use App\Entity\PasswordUpdate;
use App\Form\PasswordUpdateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class EditAccountController extends AbstractController
{

    public function __construct(){
    }

    /**
     * @Route("/edit/account/", name="edit_account")
     * @IsGranted("ROLE_USER_DOCTOR")
     * 
     */
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        
        $doctor=$this->getUser();
        $passwordUpdate=new PasswordUpdate();
        $formUpdatePassword = $this->createForm(PasswordUpdateType::class, $passwordUpdate);
        $form = $this->createForm(EditDoctorType::class, $doctor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($doctor);
            $entityManager->flush();

        }
        if ($formUpdatePassword->isSubmitted() && $formUpdatePassword->isValid()) {
            if (!password_verify($passwordUpdate->getOldPassword(), $doctor->getPassword())) {
                # code...
            }
            else{
                $doctor->setPassword(
                    $passwordEncoder->encodePassword(
                        $doctor,
                        $formUpdatePassword->get('newPassword')->getData()
                    ));
                    $entityManager->persist($doctor);
                    $entityManager->flush();
                    $this->addFlash(
                        'success',
                        ""
                    )
            }

        }
        return $this->render('edit_account/main_edit.html.twig', [
            'form' => $form->createView(),
            'formUpdatePassword' => $formUpdatePassword->createView(),
            'doctor' => $doctor,
        ]);
    }
}
