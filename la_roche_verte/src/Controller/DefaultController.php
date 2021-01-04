<?php

namespace App\Controller;
use App\Entity\Activites;
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
        $activites = $this->getDoctrine()->getRepository(Activites::class)->findAll();
        
        return $this->render('activites.html.twig', [
            'activites' => $activites,
        ]);
    }
    public function login(): Response
    {
        
        
        return $this->render('login.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    public function panier(): Response
    {
        
        
        return $this->render('panier.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    public function details($id)
    {
        
        $repo = $this->getDoctrine()->getRepository(Activites::class);
        $activites = $repo->find($id);
        return $this->render('details.html.twig', [
            'activites' => $activites,
        ]);
    }
    public function register(): Response
    {
        
        
        return $this->render('register.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    public function admin(): Response
    {
        
        
        return $this->render('accueil.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
