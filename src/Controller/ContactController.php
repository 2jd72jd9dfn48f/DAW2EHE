<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(SessionInterface $session)
    {
        $usuario = $session->get('usuario');
        return $this->render('contact.html.twig', [
            'controller_name' => 'ContactController',
            'usuario' => strlen($usuario)>0?'Hola '.$usuario:'',
        ]);
    }


}
