<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class AboutController extends AbstractController
{
    /**
     * @Route("/about", name="about")
     */
    public function index(SessionInterface $session)
    {
        $usuario = $session->get('usuario');
        return $this->render('about.html.twig', [
            'controller_name' => 'AboutController',
            'usuario' => strlen($usuario)>0?'Hola '.$usuario:'',
        ]);
    }
}
