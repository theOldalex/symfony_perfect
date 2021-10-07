<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeUtilisateurController extends AbstractController
{
    /**
     * @Route("/liste/utilisateur", name="liste_utilisateur")
     */
    public function index(): Response
    {
        return $this->render('liste_utilisateur/index.html.twig');
    }
}
