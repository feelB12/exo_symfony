<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    /**
     * @Route("/", name="Accueil")
     */
    public function home()
    {
        // je retourne  la reponse dans le HTTPFoundation
        return new Response( );
    }
    /**
     * @Route("/legals", name="Legals")
     */
    public function legals() {
        var_dump('Mentions Légales'); die;
    }
}

