<?php

namespace App\Controller;

use App\Entity\Doctor;
use App\Form\EditDoctorType;
use App\Entity\PasswordUpdate;
use App\Form\PasswordUpdateType;
use App\Entity\DoctorSocialNetworks;
use Symfony\Component\Form\FormError;
use App\Form\SocialNetworksDoctorType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class EditAccountController extends AbstractController
{

    public function __construct()
    {
    }

    /**
     * isGranted("ROLE_USER_DOCTOR")
     * @Route("/edit/account/", name="edit_account")
     * 
     */
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {

        $doctor = $this->getUser();

        if ($doctor != null) {
            $passwordUpdate = new PasswordUpdate();
            $entityManager = $this->getDoctrine()->getManager();
            $doctorSocialNetworks = new DoctorSocialNetworks();

            $doctorSocialNetworks->setDoctor($doctor);
            $formUpdatePassword = $this->createForm(PasswordUpdateType::class, $passwordUpdate);
            $formSocialLinks = $this->createForm(SocialNetworksDoctorType::class, $doctorSocialNetworks);
            $form = $this->createForm(EditDoctorType::class, $doctor);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->persist($doctor);
                $entityManager->flush();
                $this->addFlash(
                    'success',
                    "Données modifier avec succès"
                );
            }
            $formUpdatePassword->handleRequest($request);
            if ($formUpdatePassword->isSubmitted() && $formUpdatePassword->isValid()) {
                if (!password_verify($passwordUpdate->getOldPassword(), $doctor->getPassword())) {
                    $formUpdatePassword->get('oldPassword')->addError(new FormError("Le mot de passe tapé ne correspond pas au mot de passe actuel"));
                } else {
                    $doctor->setPassword(
                        $passwordEncoder->encodePassword(
                            $doctor,
                            $formUpdatePassword->get('newPassword')->getData()
                        )
                    );

                    $entityManager->persist($doctor);
                    $entityManager->flush();
                    $this->addFlash(
                        'success',
                        "Mots de passe modifier avec succès"
                    );
                }
            }
            $formSocialLinks->handleRequest($request);
            if ($formSocialLinks->isSubmitted() && $formSocialLinks->isValid()) {
                $entityManager->persist($doctorSocialNetworks);
                $entityManager->flush();
                $this->addFlash(
                    'success',
                    "Données modifier avec succès"
                );
            }

            return $this->render('edit_account/main_edit.html.twig', [
                'form' => $form->createView(),
                'formUpdatePassword' => $formUpdatePassword->createView(),
                'formRS' => $formSocialLinks->createView(),
                'doctor' => $doctor,
            ]);
        } else {
            return $this->render('main_refmed/index.html.twig', [
            ]);
        }
    }
}
