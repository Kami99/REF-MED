<?php

namespace App\Controller;

use App\Form\SearchDoctorType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainREFMEDController extends AbstractController
{
    /**
     * @Route("/", name="Home")
     */
    public function index()
    {
        $formsSearchDoctor = $this->createForm(SearchDoctorType::class);
        return $this->render('main_refmed/index.html.twig', [
            'formDoctor' => $formsSearchDoctor->createView(),

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
