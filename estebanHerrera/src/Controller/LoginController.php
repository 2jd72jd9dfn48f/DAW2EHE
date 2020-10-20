<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(SessionInterface $session)
    {
        $usuario = $session->get('usuario');
        return $this->render('login.html.twig', [
            'controller_name' => 'LoginController',
            'usuario' => strlen($usuario)>0?'Hola '.$usuario:'',
        ]);
    }
}
