<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    //  /**
    //    * @Route("/Articles", name="Articles")
   //   */
    // public function Articles()
     //{
        // je retourne une réponse valide pour ma page d'Articles
        // je retourne  la reponse dans le HTTPFoundation
    //   return new Response( 'Articles' );
    //}
    //**
     //* @Route("/Articles/{id}", name="ArticlesShow")
     //*/
    //public function ArticlesShow($id)
    //{
    //   return new Response($id);
    //    }
    // /**
    //  * @Route("/article/{id}", name="article-show")
    //  */
    private $articles = [
            '1' => [
                "title" => "La vaccination c'est trop géniale",
                "content" => "bablablblalba",
                "id" => 1,
                "published" => true

            ],
            '2' => [
                "title" => "le 2 c'est pas cool",
                "content" => "blablablabla",
                "id" => 2,
                "published" => true
            ],
            '3' => [
                "title" => "Le 3 ça déchire c'est trop génial",
                "content" => "balblalblalb",
                "id" => 3,
                "published" => true
            ],
            '4' => [
                "title" => "Le skate c'est trop génial",
                "content" => "balblalblalb",
                "id" => 4,
                "published" => false
            ]
        ];

    /**
     * @Route("/Articles", name="articleList")
     */
    public function articleList()
    {
        return $this->render('article_list.html.twig', [
            'articles' =>$this->articles
        ]);
    }
       /**
         * @Route("/article/{id}", name="articleShow")
         */
    public function articleShow($id)
    {
        // j'utilise la méthode render de l'AbstractController
        // pour récupérer un fichier Twig, le transformer en HTML
        // et le renvoyer en réponse HTTP au navigateur
        // Pour utiliser des variables dans le fichier twig, je dois
        // lui passer un tableau en second parametre, avec toutes les
        // variables que je veux utiliser
       return $this->render('article_show.html.twig', [
           'article'=>$this->articles[$id]
        ]);
    }
}
