<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        //$email = $this->getUser()->getUserIdentifier();
        return $this->render('front/index.html.twig', []);
    }

    #[Route('/connexion', name: 'connexion')]
    public function connexion(): Response
    {
        //$email = $this->getUser()->getUserIdentifier();
        return $this->render('front/login.html.twig', []);
    }

    #[Route('/crercompte', name: 'crercompte')]
    public function crercompte(): Response
    {
        //$email = $this->getUser()->getUserIdentifier();
        return $this->render('front/registration.html.twig', []);
    }
    
    #[Route('/dashboardAdmin', name: 'app_dashboard_admin')]
    public function indexAdmin(): Response
    {
        $email = $this->getUser()->getUserIdentifier();
        return $this->render('dashboard/index_admin.html.twig', [
            'controller_name' => 'DashboardController',
            'username' =>$email
        ]);
    }

    #[Route('/dashboardAgent', name: 'app_dashboard_agent')]
    public function indexAgent(): Response
    {
        $email = $this->getUser()->getUserIdentifier();
        return $this->render('dashboard/index_agent.html.twig', [
            'controller_name' => 'DashboardController',
            'username' =>$email
        ]);
    }

    #[Route('/dashboardClient', name: 'app_dashboard_client')]
    public function indexClient(): Response
    {
        $email = $this->getUser()->getUserIdentifier();
        return $this->render('dashboard/index_client.html.twig', [
            'controller_name' => 'DashboardController',
            'username' =>$email
        ]);
    }
}
