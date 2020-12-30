<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    public function index(): Response
    {
        
        
        return $this->render('accueil.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    public function accueil(): Response
    {
        
        
        return $this->render('accueil.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    public function activites(): Response
    {
        
        
        return $this->render('activites.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
