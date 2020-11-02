<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ProductsController extends AbstractController
{
    /**
     * @Route("/products/{products}/{i?content}/{currentPage?1}", name="products")
     */
    public function index($products=1,Request $request, SessionInterface $session,$currentPage)
    {

        $usuario = $session->get('usuario');
        $userlogin = strlen($usuario)>0?'Hola '.$usuario:'';
        return $this->render('products.html.twig',[
            'data' => $this->gallery,
            'currentPage' => $currentPage,
            'itemsPerPage' => 4,
            'usuario' => $usuario
        ]);

        $usuario = $session->get('usuario');
        $userlogin = strlen($usuario)>0?'Hola '.$usuario:'';
    } 

 /*        $enlace = $this->generateUrl('products',[
            'products'=> 1,
            ]);
        $enlace2 = $this->generateUrl('products',[
            'products'=> 2,
            ]);
        $enlace3 = $this->generateUrl('products',[
            'products'=> 3,
            ]);

        switch($products){
            case "2":
                return $this->render('products2.html.twig', [
                    'enlace' => $enlace,
                    'enlace2' => $enlace2,
                    'enlace3' => $enlace3,
                    'usuario' => $userlogin,
                ]);
                break;
            case "3":
                return $this->render('products3.html.twig', [
                    'enlace' => $enlace,
                    'enlace2' => $enlace2,
                    'enlace3' => $enlace3,
                    'usuario' => $userlogin,
                ]);
                break;
            default:
                return $this->render('products.html.twig', [
                    'enlace' => $enlace,
                    'enlace2' => $enlace2,
                    'enlace3' => $enlace3,
                    'usuario' => $userlogin,
                ]);
                break;
        } */



    private $gallery = [
            [
                'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
                'imagen' => 'tours-03.jpg',
                'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
                'date' => '28 March 2084',
                'days' => 'Duration: 8 days',
                'price' => '$2,200'
            ],
            [
                'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
                'imagen' => 'tours-04.jpg',
                'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
                'date' => '26 March 2084',
                'days' => 'Duration: 9 days',
                'price' => '$1,800'
            ],
            [
                'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
                'imagen' => 'tours-05.jpg',
                'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
                'date' => '24 March 2084',
                'days' => 'Duration: 8 days',
                'price' => '$1,600'
            ],
            [
                'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
                'imagen' => 'tours-06.jpg',
                'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
                'date' => '22 March 2084',
                'days' => 'Duration: 5 days',
                'price' => '$1,200'
            ],
            [
                'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
                'imagen' => 'index-03.jpg',
                'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
                'date' => '27 March 2084',
                'days' => 'Duration: 4 days',
                'price' => '$1,700'
            ],
            [
                'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
                'imagen' => 'index-04.jpg',
                'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
                'date' => '26 March 2084',
                'days' => 'Duration: 7 days',
                'price' => '$1,400'
            ],
            [
                'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
                'imagen' => 'index-05.jpg',
                'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
                'date' => '26 March 2084',
                'days' => 'Duration: 9 days',
                'price' => '$1,800'
            ],
            [
                'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
                'imagen' => 'index-06.jpg',
                'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
                'date' => '21 March 2084',
                'days' => 'Duration: 4 days',
                'price' => '$1,200'
            ]

        ];
}
