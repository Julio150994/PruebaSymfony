<?php

namespace App\Controller;

use App\Entity\Trabajador;
use App\Form\TrabajadorFormType;
use App\Repository\TrabajadorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TrabajadorController extends AbstractController
{
    private $entidadTrabajador;


    public function __construct(EntityManagerInterface $entidadTrabajador)
    {
        $this->entidadTrabajador = $entidadTrabajador;
    }

    /** Lista de trabajadores */
    #[Route('/trabajadores', name: 'trabajadores')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $list_employees = 'Trabajadores del IFEF de Cádiz';// como cadena de texto

        $repository = $doctrine->getRepository(Trabajador::class);
        $trabajadores = $repository->findAll();// para obtener todos los datos de la BD holasymphony

        return $this->render('trabajadores/lista_trabajadores.html.twig', [
            'controller_name' => 'TrabajadorController',
            'list_employees' => $list_employees,
            'trabajadores' => $trabajadores
        ]);
    }

    /** Añadimos los datos de un trabajador */
    #[Route('/trabajadores/create', name: 'trabajador_create')]
    public function create(Request $request): Response
    {
        $titulo_formulario = 'Nuevo trabajador';// como cadena de texto

        $trabajador = new Trabajador();// para añadir el nuevo dato a través de una entidad
        $formTabajador = $this->createForm(TrabajadorFormType::class, $trabajador);// creamos nuevo formulario en Symfony
        $formTabajador->handleRequest($request);
        // && $formTabajador->isValid()

        if ($formTabajador->isSubmitted()) {
            $nombre = $trabajador->getNombre();

            $this->entidadTrabajador->persist($trabajador);
            $this->entidadTrabajador->flush();

            $this->addFlash('aniadir', 'Trabajador '.$nombre.' añadido correctamente');
            return $this->redirectToRoute('trabajadores');
        }

        return $this->render('trabajadores/aniadir.html.twig', [
            'controller_name' => 'TrabajadorController',
            'titulo_formulario' => $titulo_formulario,
            'form' => $formTabajador->createView(),
            'trabajador' => $trabajador
        ]);
    }

    /** Para visualizar los datos de un trabajor en forma de lista */
    #[Route('/trabajador/datos/{id}', name: 'datos_trabajador')]
    public function show(Request $request, Trabajador $trabajador): Response
    {
        $titulo_datos = 'Datos de trabajador';

        return $this->render('trabajadores/ver_datos.html.twig', [
            'controller_name' => 'TrabajadorController',
            'titulo_datos' => $titulo_datos,
            'trabajador' => $trabajador
        ]);
    }

    /** Editamos los datos de un trabajador seleccionado */
    #[Route('/trabajadores/update/{id}', name: 'trabajador_update')]
    public function update(Request $request, Trabajador $trabajador,
        TrabajadorRepository $trabajadorRepository): Response
    {
        $titulo_formulario = 'Editar trabajador';

        $nombreAnterior = $trabajador->getNombre();// nombre del trabajador anterior

        $formTrabajador = $this->createForm(TrabajadorFormType::class, $trabajador);// creamos nuevo formulario en Symfony
        $formTrabajador->handleRequest($request);

        if ($formTrabajador->isSubmitted()) {  
            $trabajadorRepository->add($trabajador, true);

            $nombre = $trabajador->getNombre();// nombre del trabajador editado

            $this->entidadTrabajador->persist($trabajador);
            $this->entidadTrabajador->flush();

            $this->addFlash('editar', 'Trabajador, que antes fue '.$nombreAnterior.' editado correctamente');
            return $this->redirectToRoute('trabajadores');
        }

        return $this->render('trabajadores/editar.html.twig', [
            'controller_name' => 'TrabajadorController',
            'titulo_formulario' => $titulo_formulario,
            'form' => $formTrabajador->createView(),
            'trabajador' => $trabajador
        ]);
    }

    /** Eliminamos los datos de un trabajador seleccionado */
    #[Route('/trabajadores/delete/{id}', name: 'trabajador_delete')]
    public function delete(Trabajador $trabajador, TrabajadorRepository $trabajadorRepository): Response
    {
        $nombre = $trabajador->getNombre();
        $trabajadorRepository->remove($trabajador, true);

        $this->addFlash('eliminar', 'Trabajador '.$nombre.' eliminado correctamente');
        return $this->redirectToRoute('trabajadores');
    }
}
