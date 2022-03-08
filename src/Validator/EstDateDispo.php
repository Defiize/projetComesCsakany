<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

#[Annotation]
#[\Attribute]
class EstDateDispo extends Constraint
{
    
    public $message = 'Un cours a déjà lieu dans cette salle aux horaires indiqués';

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}
