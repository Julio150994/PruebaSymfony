<?php

namespace App\Controller;

use App\Entity\EmpresasRepartos;
use App\Entity\Shippings;
use App\Form\ShippingsFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShippingController extends AbstractController
{
    private $data;

    public function __construct(EntityManagerInterface $data){
        $this->data = $data;
    }

    /**
     * Pon el nombre que tu quieras para tus rutas. 
     */

    #[Route('/shippings', name: 'formulario_shipping')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $titulo_formulario = 'Pedido generado para franji1992';
        $precio_compra = 78.32.'€';

        $repository = $doctrine->getRepository(EmpresasRepartos::class);
        $empresasReparto = $repository->findAll();// para obtener todos los datos de la BD holasymphony

        return $this->render('shippings/formulario.html.twig', [
            'controller_name' => 'ShippingController',
            'titulo_formulario' => $titulo_formulario,
            'precio_compra' => $precio_compra,
            'empresasReparto' => $empresasReparto
        ]);
    }

    /** Para realizar lo de los datos de envio (shippings) */
    #[Route('/shippings/store', name: 'shipping_store')]
    public function aniadirDatosEnvio(Request $request, ManagerRegistry $doctrine) : Response
    {
        /** ¿Cómo añadimos datos desde el controlador Symfony? */
        $shipping = new Shippings();
        $formulario = $this->createForm(ShippingsFormType::class, $shipping);
        $this->formulario->handleRequest($request);
        
        if ($formulario->isSubmitted() && $formulario->isValid()) { 
            // Vamos añadiendo los datos
            $this->data->persist($shipping);
            $this->data->flush();

            return $this->redirectToRoute('formulario_shipping');
        }
        else {
            return $this->redirect->route('shippings/formulario.html.twig', [
                'formulario' => $formulario->createView(),
            ]);
        }
    }
}
