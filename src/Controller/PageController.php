<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        // je retourne une réponse valide pour ma page d'accueil
        // je retourne  la reponse dans le HTTPFoundation
        return new Response( 'Accueil');
    }
    /**
     * @Route("/test", name="Test")
     */
    public function test()
    {
        // je retourne une réponse valide pour ma page de test
        // je retourne  la reponse dans le HTTPFoundation
        return new Response( 'Test');
    }
    /**
     * @Route("/legals", name="Legals")
     */
    public function legals()
    {
        // je retourne une réponse valide pour ma page de Mention légales
        // je retourne  la reponse dans le HTTPFoundation
        return new Response( 'Mentions Légales' );
    }
}

