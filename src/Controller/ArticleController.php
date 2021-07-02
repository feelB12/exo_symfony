<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
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
    //**
     //* @Route("/Articles/{id}", name="ArticlesShow")
     //*/
    //public function ArticlesShow($id)
    //{
    //   return new Response($id);
    //    }
        /**
         * @Route("/article/{id}", name="articleshow")
         */
    public function articleShow($id)
    {
        $articles = [
            '1' => [
                 "title" => "La vaccination c'est trop géniale",
                 "content" => "bablablblalba",
                 "id" => 1
                    ],
            '2' => [
              "title" => "le 2 c'est pas cool",
              "content" => "blablablabla",
                "id" => 2
                     ],
            '3' => [
                "title" => "Le 3 ça déchire c'est trop génial",
                "content" => "balblalblalb",
                "id" => 3
                    ],
           '4' => [
                "title" => "Le skate c'est trop génial",
                "content" => "balblalblalb",
                "id" => 4
                    ]
            ];

       // $article = $articles[$id];
        //return new Response($article["title"]);
        return $this->render('article_show.html.twig', [
            'article'=>$articles[$id]
        ]);
    }
}

//Exo :
//- Affichez sur votre page d'article, l'article du tableau suivant correspondant à l'id placé dans l'URL.

//$articles = [
//   1 => [
//       "title" => "La vaccination c'est trop géniale",
//       "content" => "bablablblalba",
//       "id" => 1
//    ],
//    2 => [
//       "title" => "La vaccination c'est pas trop géniale",
//       "content" => "blablablabla",
//        "id" => 2
//    ],
//    3 => [
//        "title" => "Balkany c'est trop génial",
//       "content" => "balblalblalb",
//        "id" => 3
//    ],
//   4 => [
//        "title" => "Balkany c'est pas trop génial",
//        "content" => "balblalblalb",
//       "id" => 4
//    ]
//];