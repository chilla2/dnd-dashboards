<?php

namespace App\Form;

use App\Entity\Npc;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NpcType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('notes')
            ->add('showPlayers')
            ->add('imageFileName')
            ->add('initiativeRoll')
            ->add('initiative')
            ->add('armorClass')
            ->add('hp')
            ->add('conditions')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Npc::class,
        ]);
    }
}
