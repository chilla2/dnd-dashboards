<?php

namespace App\Form;

use App\Entity\Character;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CharacterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => false])
            ->add('notes')
            ->add('initiative', IntegerType::class, ['required' => false, 'attr' => ['placeholder' => 'Initiative'], 'label' => false])
            ->add('isEnemy', CheckboxType::class, ['label' => 'Enemy', 'required' => false])
            ->add('armorClass', IntegerType::class, ['label' => false, 'attr' => ['placeholder' => 'AC'], 'required' => false])
            ->add('hp', IntegerType::class, ['label' => false, 'attr' => ['placeholder' => 'HP'], 'required' => false])
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
            'data_class' => Character::class,
        ]);
    }
}
