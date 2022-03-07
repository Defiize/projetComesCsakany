<?php

namespace App\Controller\Admin;

use App\Entity\Cours;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;

class CoursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cours::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
             'dateHeureDebut',
             'dateHeureFin',
             AssociationField::new('professeur')
                ->setFormTypeOptions([
                    'by_reference' => false,
                ]),
                AssociationField::new('matiere')
                ->setFormTypeOptions([
                    'by_reference' => false,
                ]),
                AssociationField::new('salle')
                ->setFormTypeOptions([
                    'by_reference' => false,
                ]),
                ChoiceField::new('type')
                    ->setChoices(fn () => ["TD" => "TD", "TP" => "TP", "Cours" => "Cours"])
                    ->renderAsNativeWidget()
        ];
    }
    
}

// ChoiceField::new('note')
//                 ->setChoices(fn () => [0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5])
//                 ->renderAsNativeWidget(),
//             'commentaire',
//             'emailEtudiant',
//             AssociationField::new('professeur'),
