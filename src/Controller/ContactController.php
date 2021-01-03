<?php

namespace App\Controller;

use App\Entity\{Tour,Categoria,Contacto};
use App\Form\ContactoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(SessionInterface $session, Request $request)
    {
        $contacto=new Contacto();
        $form= $this->createForm(ContactoType::class, $contacto);

        $form->handleRequest($request);
        $check='';
        if ($form->isSubmitted() && $form->isValid()){
            $contacto->setDate(new \DateTime("now"));
            $entityManager= $this->getDoctrine()->getManager();
            $entityManager->persist($contacto);
            $entityManager->flush();
            $check = 'Logueado correctamente';
        }

        $usuario = $session->get('usuario');
        return $this->render('contact.html.twig', [
            'controller_name' => 'ContactController',
            'usuario' => strlen($usuario)>0?'Hola '.$usuario:'',
            'form'=>$form->createView(),
            'check'=> strlen($check)>0?'Logueado correctamente':''
        ]);
    }


}
