<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class EstDateDispoValidator extends ConstraintValidator
{

    public function validate($nouveauCours, Constraint $constraint)
    {
        $salleCours = $nouveauCours->getSalle()->getCours();

        foreach($salleCours as $cours ){
            if(
                !(($nouveauCours->getDateHeureDebut() <= $cours->getDateHeureDebut()
                && $nouveauCours->getDateHeureFin() <= $cours->getDateHeureDebut())
                ||  ($nouveauCours->getDateHeureDebut() >= $cours->getDateHeureFin()
                && $nouveauCours->getDateHeureFin() >= $cours->getDateHeureFin()))
                && $nouveauCours !== $cours
            )
            {
                $this->context->buildViolation($constraint->message)
                    ->atPath('salle')
                    ->addViolation();
                return;
            }
        }
    }

    public function validatedBy()
    {
        return static::class.'Validator';
    }

}
