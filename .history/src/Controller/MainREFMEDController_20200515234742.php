<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainREFMEDController extends AbstractController
{
    /**
     * @Route("/", name="Home")
     */
    public function index(UserPasswordEncoderInterface $passwordEncoder)
    {
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
