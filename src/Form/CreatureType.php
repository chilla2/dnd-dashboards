<?php

namespace App\Form;

use App\Entity\Creature;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CreatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => false])
            ->add('description')
            ->add('notes')
            ->add('showPlayers')
            ->add('initiative', IntegerType::class, ['label' => false, 'required' => false])
            ->add('isEnemy', CheckboxType::class, ['label' => false, 'required' => false])
            ->add('armorClass', IntegerType::class, ['label' => false, 'required' => false])
            ->add('hp', IntegerType::class, ['label' => false, 'required' => false])
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
            'data_class' => Creature::class,
        ]);
    }
}
