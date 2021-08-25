<?php

namespace App\Controller\Admin;

use App\Entity\Npc;
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

class NpcCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Npc::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
        IdField::new('id')->hideOnForm()->hideOnIndex(),
        TextField::new('name'),
        TextEditorField::new('description')->hideOnIndex(),
        TextEditorField::new('notes')->hideOnIndex(),
        TextareaField::new('imageFile')->setFormType(VichImageType::class)->hideOnIndex(),
        DateTimeField::new('updatedAt')->hideOnForm()->hideOnIndex(),
        ];
    }

}
