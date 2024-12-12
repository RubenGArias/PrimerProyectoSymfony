<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PruebaController extends AbstractController
{
    #[Route('/', name: 'inicio')]
    public function inicio(): Response
    {

        return $this->render('prueba/index.html.twig', [
            'controller_name' => 'PruebaController',
        ]);
    }

    #[Route('/cliente/{nombre}/{edad}', name: 'cliente')]
    public function cliente($nombre = "Sin nombre", $edad = 0)
    {
        return new Response('Página de cliente, su nombre es '.$nombre. ' tiene '.$edad.' años.');
        /*return $this->render('prueba/index.html.twig', [
            'controller_name' => 'PruebaController',
        ]);*/
    }
}
