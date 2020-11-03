<?php

namespace App\Controller;

use App\Entity\Tours;
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
        /*
        
        $tours=new Tours();
        $tours->setId();
        $tours->setTitulo();
        $tours->setImagen();
        $tours->setDescripcion();
        $tours->setFecha();
        $tours->setDias();
        $tours->setPrecio();
        */

        foreach($this->gallery as $key => $value){
            $tours=new Tours();
            $tours->setId($key['id']);
            $tours->setTitulo($key['titulo']);
            $tours->setImagen($key['imagen']);
            $tours->setDescripcion($key['description']);
            $tours->setFecha($key['date']);
            $tours->setDias($key['days']);
            $tours->setPrecio($key['price']);

            $entityManager->presist($tours);
        }
        $entityManager->flush();

        return $this->render('add/index.html.twig', [
            'controller_name' => 'AddController',
            'id' => '' /* $tours->getId() */,
            'titulo' => 'tour añadido'
        ]);
    }

    
    private $gallery = [
        [
            'id' => '1',
            'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
            'imagen' => 'tours-03.jpg',
            'description' => 'Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.',
            'date' => '28 March 2084',
            'days' => 'Duration: 8 days',
            'price' => '$2,200'
        ],
        [
            'id' => '2',
            'titulo' => '>Proin Gravida Nibhvel Lorem Quis Bind',
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
        [
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
