<?php

namespace App\Form;

use App\Entity\Encounter;
use App\Entity\Character;
use App\Entity\Npc;
use App\Entity\Creature;
use App\Form\CharacterType;
use App\Form\NpcType;
use App\Form\CreatureType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CombatTrackerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('characters', CollectionType::class, [
            'entry_type' => CharacterType::class,
            'entry_options' => ['label' => false],
        ]);
        $builder->add('npcs', CollectionType::class, [
            'entry_type' => NpcType::class,
            'entry_options' => ['label' => false],
        ]);
        $builder->add('creatures', CollectionType::class, [
            'entry_type' => CreatureType::class,
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
