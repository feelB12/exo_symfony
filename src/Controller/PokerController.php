<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController extends AbstractController
{
    /**
     * @Route("/Poker", name="Poker")
     */
    public function Poker( Request $request)
    {
        // utiliser la classe Request
        $request = Request:: createFromGlobals();

        // Stocker dans la variable $request la valeur du paramètre
        $age = $request->query->get('age');


        if ($age >= 18) {
            //si l'age est > ou = à 18 ans ou plus on le laisse rentrer et lui envoi le message
            return new Response('Tu as enfin 18 pige tu peux rentrer');
        } else {

        // redirection de la route Minor
        // grâce à la méthode redirectToRoute existant dans
        // l'AbstractController
        // Ma classe PokerController hérite d'AbstractController
        // hérite de surcroit la méthode redirectToRoute
            return $this->redirectToRoute('Minor');
        }
    }
    /**
     * @Route("/Minor", name="Minor")
     */
    public function Minor()
    {
       return new Response('tes trop petit');
    }
}