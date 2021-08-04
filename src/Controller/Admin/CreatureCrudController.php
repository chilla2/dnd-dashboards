<?php

namespace App\Controller\Admin;

use App\Entity\Creature;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CreatureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Creature::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
