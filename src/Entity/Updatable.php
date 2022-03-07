<?php
namespace App\Entity;

trait Updatable
{
    public function updateFromArray(array $data): array{
        $errors = [];
        foreach($data as $property => $value){
            if (property_exists($this, $property)){
                $this->{$property}=$value;
            }else{
                $errors[]=$property;
            }
        }
        return $errors;
    }

}