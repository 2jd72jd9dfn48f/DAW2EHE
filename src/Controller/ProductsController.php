<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ProductsController extends AbstractController
{
    /**
     * @Route("/products", name="products")
     */
    public function index(SessionInterface $session)
    {
        $usuario = $session->get('usuario');
        return $this->render('products.html.twig', [
            'controller_name' => 'ProductsController',
            'usuario' => strlen($usuario)>0?'Hola '.$usuario:'',
        ]);
    }
}
