<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Controller\UtilisateurController;
use App\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    /**
     * @Route("/inscription", name="register")
     */
    public function index(Request $request): Response
    {
        
        $utilisateur = new Utilisateur;
        $form = $this->createForm(RegisterType::class, $utilisateur) ;
        
        $form ->handleRequest($request) ;

         (if $form->isSubmitted() && if $form->isValid()){

            $utilisateur = $form->getData();
            

        }

         
        
        return $this->render('register/index.html.twig');
    }
}
