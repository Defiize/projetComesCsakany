<?php

namespace App\Controller\Api;

use App\Entity\Avis;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AvisRepository;

use Symfony\Component\HttpFoundation\Request;

#[Route('/api/avis', name: 'api_avis_')]
class AvisController extends AbstractController
{
    use ControllerHelpers;

    #[Route('/{id}', name: 'delete_avis',  methods:['DELETE'])]
    public function deleteAvis(Avis $avis =null, EntityManagerInterface $entityManager): JsonResponse
    {

        $entityManager->remove($avis);
        $entityManager->flush();

        return $this-> json($avis, 204);
    }

    #[Route('', name: 'list_avis',  methods:['GET'])]
    public function listAvis(AvisRepository $repository): JsonResponse
    {

        $avis = $repository->findAll();      

        return $this-> json($avis, 200);
    }

    #[Route('/{id}', name: 'edit_avis',  methods:['PATCH'])]
    public function editAvis(Avis $avis, Request $request,ValidatorInterface $validatorInterface, EntityManagerInterface $entityManager): JsonResponse
    {
        if (is_null($avis)){
            return $this-> json(['message erreur'=>'Cette avis n existe pas'], 404);
        }
        $data = json_decode($request->getContent(),true);

        $missingProperties = $avis->updateFromArray($data);

        if(count($missingProperties)>0){
            $messages=[];

            foreach ($missingProperties as $property){
                $messages[$property]= 'Cette propriété n existe pas';
            }
            return $this->json($messages, 400);
        }


        $errors = $validatorInterface->validate($avis);

        if ($errors->count()>0){
            return $this->json($this->formatErrors($errors),400);
        }
        $entityManager->persist($avis);
        $entityManager->flush();

        return $this-> json($avis, 200);
    }
}
