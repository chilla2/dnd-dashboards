<?php

namespace App\Form;

use App\Entity\Encounter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EncounterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('characters', CollectionType::class, [
            'entry_type' => PlayerType::class,
            'entry_options' => ['label' => false],
        ]);
        $builder->add('npcs', CollectionType::class, [
            'entry_type' => NpcType::class,
            'entry_options' => ['label' => false],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Encounter::class,
        ]);
    }
}
