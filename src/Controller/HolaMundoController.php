<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HolaMundoController extends AbstractController
{    
    #[Route('/hola/mundo', name: 'holamundo')]
    public function index(): Response
    {
        return $this->render('hola_mundo/index.html.twig', [
            'controller_name' => 'HolaMundoController',
        ]);
    }

    #[Route('/tabla', name: 'tablaPrueba')]
    public function tabla(): Response 
    {
        /** Mañana martes a aprender a inicializar variables y llevarlas a la vista en Symfony */

        $variable = "Prueba";

        return $this->render('hola_mundo/tabla.html.twig', [
            'variable' => $variable,
            'controller_name' => 'HolaMundoController'
        ]);
    }
}
