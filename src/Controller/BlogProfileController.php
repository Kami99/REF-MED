<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogProfileController extends AbstractController
{
    /**
     * @Route("/blog/profile", name="blog_profile")
     */
    public function index()
    {
        return $this->render('blog_profile/index.html.twig', [
            'controller_name' => 'BlogProfileController',
        ]);
    }
}
