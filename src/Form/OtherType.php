<?php

namespace App\Form;

use App\Entity\Other;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class OtherType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('heading')
            ->add('description')
            ->add('notes')
            ->add('showPlayers')
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
            'data_class' => Other::class,
        ]);
    }
}
