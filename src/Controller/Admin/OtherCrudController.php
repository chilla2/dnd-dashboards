<?php

namespace App\Controller\Admin;

use App\Entity\Other;
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

class OtherCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Other::class;
    }


    public function configureFields(string $pageName): iterable
    {
         return [
         IdField::new('id')->hideOnForm(),
         TextField::new('heading'),
         TextEditorField::new('description'),
         TextEditorField::new('notes'),
         TextareaField::new('imageFile')->setFormType(VichImageType::class),
         DateTimeField::new('updatedAt')->hideOnForm(),
         ];
    }

}
