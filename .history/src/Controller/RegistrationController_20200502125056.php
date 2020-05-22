<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Doctor;
use App\Entity\Pharmacy;
use App\Form\DoctorType;
use App\Entity\UsersBlog;
use App\Entity\Laboratory;
use App\Form\UsersBlogFormType;
use App\Form\PharmacyRegisterType;
use App\Form\RegistrationFormType;
use App\Form\LaboratoryRegisterType;
use App\Security\UsersAuthenticator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
         /**
     * @Route("/inscription/praticien", name="app_register_praticien")
     */
    public function registerDoctor(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, UsersAuthenticator $authenticator): Response
    {
        $doctor = new Doctor();
        $doctor->setRoles(['ROLE_USER_DOCTOR']);
        $form = $this->createForm(DoctorType::class, $doctor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $doctor->setPassword(
                $passwordEncoder->encodePassword(
                    $doctor,
                    $form->get('password')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($doctor);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $guardHandler->authenticateUserAndHandleSuccess(
                $doctor,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );
        }

        return $this->render('registration/registerMedecin.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }


     /**
     * @Route("/inscription/blog", name="app_register_blog")
     */
    public function registerBlog(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, UsersAuthenticator $authenticator): Response
    {
        $userBlog = new UsersBlog();
        $userBlog->setRoles(['ROLE_USER_BLOG']);
        $form = $this->createForm(UsersBlogFormType::class, $userBlog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $userBlog->setPassword(
                $passwordEncoder->encodePassword(
                    $userBlog,
                    $form->get('password')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($userBlog);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $guardHandler->authenticateUserAndHandleSuccess(
                $userBlog,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );
        }

        return $this->render('registration/registerBlog.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
