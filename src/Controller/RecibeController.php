<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class RecibeController extends AbstractController
{
    /**
     * @Route("/recibe", name="recibe")
     */
    public function index(Request $request, SessionInterface $session)
    {
        $usuario = $session->get('usuario');
        $nombre=$request->request->get('name');
        $email=$request->request->get('email');
        $subject=$request->request->get('subject');
        $message=$request->request->get('message');

        return $this->render('recibe.html.twig', [
            'controller_name' => 'RecibeController',
            'usuario' => strlen($usuario)>0?'Hola '.$usuario:'',
            'name' => $nombre,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
        ]);
    }
}
