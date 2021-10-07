<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutController extends AbstractController
{
    /**
     * @Route("/ajout", name="ajout")
     */
    public function index(): Response
    {
        return $this->render('ajout/index.html.twig');
    }
}
