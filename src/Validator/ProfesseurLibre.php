<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

#[Annotation]
#[\Attribute]
class ProfesseurLibre extends Constraint
{
   
    public $message = 'Ce professeur réalise déjà un cours aux horaires indiqués';

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}
