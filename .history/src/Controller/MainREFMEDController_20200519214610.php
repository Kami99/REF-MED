<?php

namespace App\Controller;

use App\Form\SearchDoctorType;
use App\Form\SearchDrugsType;
use App\Form\SearchLabotaryType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class MainREFMEDController extends AbstractController
{
    /**
     * @Route("/", name="Home")
     */
    public function index(Request $request)
    {
        $formSearchDoctor = $this->createForm(SearchDoctorType::class);
        $formSearchLaboratory = $this->createForm(SearchLabotaryType::class);
        $formSearchDrugs = $this->createForm(SearchDrugsType::class);
        $formSearchDoctor->handleRequest($request);
        if($formSearchDoctor->isSubmitted() && $formSearchDoctor->isValid()){
            $formSearchDoctor->get('latitude');
            
            // return $this->redirectToRoute('SearchDoctor'); 
        }
        return $this->render('main_refmed/index.html.twig', [
            'formDoctor' => $formSearchDoctor->createView(),
            'formLaboratory' => $formSearchLaboratory->createView(),
            'formDrugs' => $formSearchDrugs->createView(),

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
