<?php
namespace App\Controller\Api;

use Symfony\Component\Validator\ConstraintViolationListInterface;

trait ControllerHelpers
{
    protected function formatErrors(ConstraintViolationListInterface $errors): array
    {
        $messages = [];
        foreach ($errors as $error) {
            $messages[$error->getPropertyPath()] = $error->getMessage();
        }

        return $messages;
    }
}