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
use Symfony\Component\Form\FormError;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class EditAccountController extends AbstractController
{

    public function __construct(){
    }

    /**
     * @Route("/edit/account/", name="edit_account")
     * 
     */
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        
        $doctor=$this->getUser();
        dd($doctor);
        $passwordUpdate=new PasswordUpdate();
        $formUpdatePassword = $this->createForm(PasswordUpdateType::class, $passwordUpdate);
        $form = $this->createForm(EditDoctorType::class, $doctor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($doctor);
            $entityManager->flush();
            $this->addFlash(
                'success',
                "Données modifier avec succès"
            );

        }
        if ($formUpdatePassword->isSubmitted() && $formUpdatePassword->isValid()) {
            if (!password_verify($passwordUpdate->getOldPassword(), $doctor->getPassword())) {
                $formUpdatePassword->get('oldPassword')->addError(new FormError("Le mot de passe tapé ne correspond pas au mot de passe actuel"));
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
                        "Mots de passe modifier avec succès"
                    );
            }

        }
        return $this->render('edit_account/main_edit.html.twig', [
            'form' => $form->createView(),
            'formUpdatePassword' => $formUpdatePassword->createView(),
            'doctor' => $doctor,
        ]);
    }
}
