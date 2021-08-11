<?php

namespace App\Form;

use App\Entity\Npc;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class NpcType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('notes')
            ->add('showPlayers')
            ->add('initiativeRoll')
            ->add('initiative')
            ->add('armorClass')
            ->add('hp')
            ->add('conditions')
            ->add('imageFile', VichImageType::class, [
                'required' => false,
                'allow_delete' => true,
                'asset_helper' => true,
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Npc::class,
        ]);
    }
}
