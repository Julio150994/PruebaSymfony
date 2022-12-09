<?php

namespace App\Form;

use App\Entity\Shippings;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ShippingsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('direccion')
            ->add('portal')
            ->add('nombreCalle')
            ->add('piso')
            ->add('codigoPostal')
            ->add('ciudad')
            ->add('provincia')
            ->add('pais')
            ->add('telefono')
            ->add('observaciones')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Shippings::class,
        ]);
    }
}
