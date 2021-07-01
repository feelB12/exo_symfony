<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/Articles", name="Articles")
     */
    public function Articles()
    {
        // je retourne une réponse valide pour ma page d'Articles
        // je retourne  la reponse dans le HTTPFoundation
        return new Response( 'Articles' );
    }
}
