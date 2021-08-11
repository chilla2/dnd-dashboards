<?php

namespace App\Controller\Admin;

use App\Entity\Encounter;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EncounterCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Encounter::class;
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
