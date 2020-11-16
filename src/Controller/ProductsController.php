<?php

namespace App\Controller;


use App\Entity\Tour;
use App\Entity\Categoria;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ProductsController extends AbstractController
{
    //antigua ruta @Route("/products/{products}/{i?content}/{currentPage?1}", name="products")

    /**
     * @Route("/products/{currentPage?1}/{currentCategory?categoria1}", name="products")
     */
    public function index(Request $request, SessionInterface $session, $products=1,$currentPage,$currentCategory)
    {
        $categoria=$this->getDoctrine()
        ->getRepository(Categoria::Class)
        ->FindOneBy(['categoria'=>$currentCategory]);

        $tours=$this->getDoctrine()
                    ->getRepository(Tour::Class)
                    ->findBy(['categoria'=>$categoria->getId()]);

        //$tours=$categoria->getTours();

        return $this->render('products.html.twig',[
            'titulo'=>'Home',
            'data'=>$tours,
            'currentPage' => $currentPage,
            'currentCategory' => $currentCategory,
            'itemsPerPage' => 4,           

        ]);

        $usuario = $session->get('usuario');
        $userlogin = strlen($usuario)>0?'Hola '.$usuario:'';
    } 


    }
    
