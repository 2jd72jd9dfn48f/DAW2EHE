<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ProductsController extends AbstractController
{
    /**
     * @Route("/products/{parametro<\d{2}>?}", name="products")
     */
    public function index($parametro, SessionInterface $session)
    {
        $usuario = $session->get('usuario');
        $userlogin = strlen($usuario)>0?'Hola '.$usuario:'';

        switch($parametro){
            case "02":
                return $this->render('products2.html.twig', [
                    'usuario' => $userlogin,
                ]);
                break;
            case "03":
                return $this->render('products3.html.twig', [
                    'usuario' => $userlogin,
                ]);
                break;
            default:
                return $this->render('products.html.twig', [
                    'usuario' => $userlogin,
                ]);
                break;
        }

    } 
}
