<?php

namespace App\DataFixtures;

use App\Entity\EmpresasRepartos;
use App\Entity\Shippings;
use App\Entity\Trabajador;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $this->guardarTrabajador($manager);
        $this->guardarEmpresaReparto($manager);

        $manager->flush();
    }

    public function guardarTrabajador(ObjectManager $manager) {
        /*$trabajador = new Trabajador();
        $trabajador->setNombre("Avelino");
        $trabajador->setApellidos("López");
        $trabajador->setEmail("avelinolopez@gmail.com");
        $manager->persist($trabajador);

        // Creación de otros datos del trabajador
        $trabajador2 = new Trabajador();      
        $trabajador2->setNombre("Julio");
        $trabajador2->setApellidos("Muñoz");
        $trabajador2->setEmail("juliomunoz@gmail.com");
        $manager->persist($trabajador2);

        // Creación de otros datos del trabajador
        $trabajador3 = new Trabajador();
        $trabajador3->setNombre("Felipe");
        $trabajador3->setApellidos("Chacón");
        $trabajador3->setEmail("felipechacon@gmail.com");
        $manager->persist($trabajador3);

        // Creación de otros datos del trabajador
        $trabajador4 = new Trabajador();
        $trabajador4->setNombre("David");
        $trabajador4->setApellidos("Miguens");
        $trabajador4->setEmail("davidmiguens@gmail.com");
        $manager->persist($trabajador4);*/
    }

    public function guardarEmpresaReparto(ObjectManager $manager) {
        /*$empresaReparto1 = new EmpresasRepartos();
        $empresaReparto1->setNombre('Puerto Real SA');
        $empresaReparto1->setDireccion('Calle Soledad, 34, Puerto Real');
        $empresaReparto1->setEmail('puertorealsa@gmail.com');
        $empresaReparto1->setTelefono('678932116');
        $empresaReparto1->setImagen('images/logos_empresa/puertorealsa.png');
        $empresaReparto1->setCostePedidoNormal(20.34);
        $empresaReparto1->setCostePedidoUrgente(34.56);
        $empresaReparto1->setDeleted(0);// por defecto 0
        $manager->persist($empresaReparto1);

        $empresaReparto2 = new EmpresasRepartos();
        $empresaReparto2->setNombre('Gadir SA');
        $empresaReparto2->setDireccion('Calle Sacramento, 56, Cádiz');
        $empresaReparto2->setEmail('gadirsa@gmail.com');
        $empresaReparto2->setTelefono('678134128');
        $empresaReparto2->setImagen('images/logos_empresa/cadiz_gadir.png');
        $empresaReparto2->setCostePedidoNormal(23.34);
        $empresaReparto2->setCostePedidoUrgente(31.11);
        $empresaReparto2->setDeleted(0);// por defecto 0
        $manager->persist($empresaReparto2);

        $empresaReparto3 = new EmpresasRepartos();
        $empresaReparto3->setNombre('Envios Barrosa');
        $empresaReparto3->setDireccion('Calle de la Salvia, 120, Chiclana de la Frontera');
        $empresaReparto3->setEmail('barrosaenvios@gmail.com');
        $empresaReparto3->setTelefono('678451131');
        $empresaReparto3->setImagen('images/logos_empresa/chiclanasa.png');
        $empresaReparto3->setCostePedidoNormal(28.09);
        $empresaReparto3->setCostePedidoUrgente(33.27);
        $empresaReparto3->setDeleted(0);// por defecto 0
        $manager->persist($empresaReparto3);*/
    }
}
