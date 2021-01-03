<?php

namespace App\Form;

use App\Entity\Tour;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('imagen')
            ->add('description')
            ->add('date')
            ->add('days')
            ->add('price')
            ->add('categoria')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tour::class,
        ]);
    }
}
