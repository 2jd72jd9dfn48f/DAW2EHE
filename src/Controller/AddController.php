<?php

namespace App\Controller;

use App\Entity\Tour;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @Route("/add", name="add")
     */
    public function index(EntityManagerInterface $entityManager)
    {


        foreach($this->gallery as $key => $value){
            foreach($value as $prod)
            $tour=new Tour();
            $tour->setTipo($key);
            $tour->setTitulo($prod['titulo']);
            $tour->setImagen($prod['imagen']);
            $tour->setDescription($prod['description']);
            $tour->setDate(new \Datetime($this->Formato($prod['date'])));
            $tour->setDays($prod['days']);
            $tour->setPrice($prod['price']);

            $entityManager->persist($tour);
        }
        $entityManager->flush();

        return $this->render('add/index.html.twig', [
            'controller_name' => 'AddController',
            'id' => '' /* $tours->getId() */,
            'titulo' => 'tour añadido'
        ]);
    }

    private function Formato($fecha){
        $fecha=str_replace(",", "", $fecha);
        $fecha_array=explode(" ",$fecha);
        $mes=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
        return $fecha_array[2]. "-" . (array_search($fecha_array[0],$mes)+1);
    }

    
    private $gallery = [
        'categoria1'=>        [
            'id' => '1',
            'titulo' => 'Proin Gravida Nibhvel Lorem Quis Bind',
            'imagen' => 'tours-03.jpg',
            'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
            'date' => '28 March 2084',
            'days' => 'Duration: 8 days',
            'price' => '$2,200'
        ],
        [
            'id' => '2',
            'titulo' => 'Proin Gravida Nibhvel Lorem Quis Bind',
            'imagen' => 'tours-04.jpg',
            'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
            'date' => '26 March 2084',
            'days' => 'Duration: 9 days',
            'price' => '$1,800'
        ],
        [
            'id' => '3',
            'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
            'imagen' => 'tours-05.jpg',
            'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
            'date' => '24 March 2084',
            'days' => 'Duration: 8 days',
            'price' => '$1,600'
        ],
        [
            'id' => '4',
            'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
            'imagen' => 'tours-06.jpg',
            'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
            'date' => '22 March 2084',
            'days' => 'Duration: 5 days',
            'price' => '$1,200'
        ],
        'categoria2'=>   [
            'id' => '5',
            'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
            'imagen' => 'index-03.jpg',
            'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
            'date' => '27 March 2084',
            'days' => 'Duration: 4 days',
            'price' => '$1,700'
        ],
        [
            'id' => '6',
            'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
            'imagen' => 'index-04.jpg',
            'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
            'date' => '26 March 2084',
            'days' => 'Duration: 7 days',
            'price' => '$1,400'
        ],
        [
            'id' => '7',
            'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
            'imagen' => 'index-05.jpg',
            'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
            'date' => '26 March 2084',
            'days' => 'Duration: 9 days',
            'price' => '$1,800'
        ],
        [
            'id' => '8',
            'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
            'imagen' => 'index-06.jpg',
            'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
            'date' => '21 March 2084',
            'days' => 'Duration: 4 days',
            'price' => '$1,200'
        ]

    ];
}
