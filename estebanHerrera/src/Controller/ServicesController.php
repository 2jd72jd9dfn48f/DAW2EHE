<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ServicesController extends AbstractController
{
    /**
     * @Route("/services", name="services")
     */
    public function index(SessionInterface $session)
    {
        $usuario = $session->get('usuario');
        return $this->render('services.html.twig', [
            'controller_name' => 'ServicesController',
            'usuario' => strlen($usuario)>0?'Hola '.$usuario:'',
        ]);
    }
}
