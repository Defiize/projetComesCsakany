<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ProfesseurLibreValidator extends ConstraintValidator
{
    public function validate($nouveauCours, Constraint $constraint)
    {
        $professeurCours = $nouveauCours->getProfesseur()->getCours();

        foreach($professeurCours as $cours ){
            if(
                !(($nouveauCours->getDateHeureDebut() <= $cours->getDateHeureDebut()
                && $nouveauCours->getDateHeureFin() <= $cours->getDateHeureDebut())
                ||  ($nouveauCours->getDateHeureDebut() >= $cours->getDateHeureFin()
                && $nouveauCours->getDateHeureFin() >= $cours->getDateHeureFin()))
                && $nouveauCours !== $cours
            )
            {
                $this->context->buildViolation($constraint->message)
                    ->atPath('professeur')
                    ->addViolation();
                return;
            }
        }
    }
}
