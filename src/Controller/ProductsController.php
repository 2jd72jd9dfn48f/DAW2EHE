<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ProductsController extends AbstractController
{
    /**
     * @Route("/products/{products}", name="products")
     */
    public function index($products=1,Request $request, SessionInterface $session)
    {
        $usuario = $session->get('usuario');
        $userlogin = strlen($usuario)>0?'Hola '.$usuario:'';

        $enlace = $this->generateUrl('products',[
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
        }

    } 
}
