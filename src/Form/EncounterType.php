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

// this form type is only for ADDING new fighters to the an encounter
class EncounterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*
        // render the forms of the objects that have already been added to encounter
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
        */

        // add objects from entire repository - select with checkboxes
        $builder->add('characters', EntityType::class, [
            // looks for choices from this entity
            'class' => Character::class,
            'choice_label' => 'name',
            // used to render a select box, check boxes or radios
            'multiple' => true,
            'expanded' => true,
        ]);
        $builder->add('npcs', EntityType::class, [
            // looks for choices from this entity
            'class' => Npc::class,
            'choice_label' => 'name',
            // used to render a select box, check boxes or radios
            'multiple' => true,
            'expanded' => true,
        ]);
        $builder->add('creatures', EntityType::class, [
            // looks for choices from this entity
            'class' => Creature::class,
            'choice_label' => 'name',
            // used to render a select box, check boxes or radios
            'multiple' => true,
            'expanded' => true,
        ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Encounter::class,
        ]);
    }
}
