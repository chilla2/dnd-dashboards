<?php

namespace App\Controller\Admin;

use App\Entity\Creature;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class CreatureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Creature::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
        IdField::new('id')->hideOnForm(),
        TextField::new('name'),
        TextEditorField::new('description'),
        TextEditorField::new('notes'),
        BooleanField::new('initiative'),
        IntegerField::new('initiativeRoll'),
        IntegerField::new('hp'),
        TextareaField::new('imageFile')->setFormType(VichImageType::class),
        DateTimeField::new('updatedAt')->hideOnForm(),
        ];
    }

}
