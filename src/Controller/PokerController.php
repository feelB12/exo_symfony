<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController
{
    /**
     * @Route("/Poker", name="Poker")
     */
    public function Poker()
    {
        // utiliser la classe Request
        $request = Request:: createFromGlobals();

        // Stocker dans la variable $request la valeur du paramètre
        $age= $request->query->get('age');

        if ($age >= 18) {
            return new Response('bienvenue');
        } else {
            return new Response('tes trop petit');
        }
    }
}
