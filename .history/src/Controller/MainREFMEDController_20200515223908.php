<?php

namespace App\Controller;

use App\Repository\DoctorRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class MainREFMEDController extends AbstractController
{
    /**
     * @Route("/", name="Home")
     */
    public function index(UserPasswordEncoderInterface $passwordEncoder, DoctorRepository $doctor)
    {
        
        
        $doctor=$this->getUser();
                     $doctor->setPassword($passwordEncoder->encodePassword($doctor,"leila12345#"));
        return $this->render('main_refmed/index.html.twig', [
        ]);
    }
     /**
     * @Route("/services", name="services")
     */
    public function service()
    {
        return $this->render('main_refmed/services.html.twig', [
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('main_refmed/contact.html.twig', [
        ]);
    }

        /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('main_refmed/about.html.twig', [
        ]);
    }

}
