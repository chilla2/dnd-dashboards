<?php

namespace App\Form;

use App\Entity\Encounter;
use App\Entity\Character;
use App\Entity\Npc;
use App\Entity\Monster;
use App\Form\CharacterType;
use App\Form\NpcType;
use App\Form\MonsterType;
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
        ]);
        $builder->add('npcs', CollectionType::class, [
            'entry_type' => NpcType::class,
        ]);
        $builder->add('monsters', CollectionType::class, [
            'entry_type' => MonsterType::class,
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Encounter::class,
            'csrf_protection' => true,
            // the name of the hidden HTML field that stores the token
            'csrf_field_name' => 'token',
            // an arbitrary string used to generate the value of the token
            // using a different string for each form improves its security
            'csrf_token_id'  => 'edit-combat',
        ]);
    }
}
