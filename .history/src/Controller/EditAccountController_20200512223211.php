<?php

namespace App\Controller;

use App\Entity\Doctor;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EditAccountController extends AbstractController
{
    private $request;
    private $manager;

    public function __construct(Request $request, ObjectManager $manager){
        $this->request=$request;
        $this->manager=$manager;

    }

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
