<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/Articles", name="Articles")
     */
    public function Articles() {
        var_dump('Articles'); die;
    }
}
