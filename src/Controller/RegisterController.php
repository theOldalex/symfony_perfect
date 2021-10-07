<?php

namespace App\Controller;

use App\Controller\UtilisateurController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    /**
     * @Route("/inscription", name="register")
     */
    public function index(): Response
    {
        
        $utilisateur = new Utilisateur;
        
        
        
        
        return $this->render('register/index.html.twig');
    }
}
