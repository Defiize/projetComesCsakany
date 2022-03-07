<?php

namespace App\Controller\Api;

use App\Entity\Avis;
use App\Entity\Professeur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProfesseurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\ConstraintViolationList;

#[Route('/api/professeurs', name: 'api_professeurs_')]
class ProfesseurController extends AbstractController
{
    use ControllerHelpers;

    #[Route('', name: 'list', methods:['GET'])]
    public function list(ProfesseurRepository $repository): JsonResponse
    {
        $professeurs = $repository->findAll();
        
        // $response =  new Response;
        // $response->setStatusCode(Response::HTTP_OK);
        // $response->setContent(json_encode(array_map(fn ($professeur)=> $professeur->toArray(),$professeurs)));
        // $response->headers->set('Content-Type', 'application/json');

        // return $response;

        return $this-> json($professeurs, 200);
    }

    #[Route('/{id}', name: 'name', methods:['GET'])]
    public function show( Professeur $professeur =null): JsonResponse
    {        
        // $response =  new Response;
        // $response->setStatusCode(Response::HTTP_OK);
        // $response->setContent(json_encode(array_map(fn ($professeur)=> $professeur->toArray(),$professeurs)));
        // $response->headers->set('Content-Type', 'application/json');

        // return $response;
        if (is_null($professeur)){
            return $this-> json(['message erreur'=>'Ce professeur n existe pas'], 404);
        }
        return $this-> json($professeur, 200);
    }
    #[Route('/{id}/avis', name: 'list_avis', methods:['GET'])]
    public function listAvis( Professeur $professeur =null): JsonResponse
    {        
        // $response =  new Response;
        // $response->setStatusCode(Response::HTTP_OK);
        // $response->setContent(json_encode(array_map(fn ($professeur)=> $professeur->toArray(),$professeurs)));
        // $response->headers->set('Content-Type', 'application/json');

        // return $response;
        if (is_null($professeur)){
            return $this-> json(['message erreur'=>'Ce professeur n existe pas'], 404);
        }
        return $this-> json($professeur->getAvis()->toArray(), 200);
    }
    
    // Body : {
    //     "id": 1,
    //     "note": 5,
    //     "commentaire": "bref",
    //     "email etudiant": "bref@iut.com"
    // }
    #[Route('/{id}/avis', name: 'create_avis', methods:['POST'])]
    public function createAvis( Professeur $professeur =null, Request $request, ValidatorInterface $validatorInterface, EntityManagerInterface $entityManager): JsonResponse
    {        
        // $response =  new Response;
        // $response->setStatusCode(Response::HTTP_OK);
        // $response->setContent(json_encode(array_map(fn ($professeur)=> $professeur->toArray(),$professeurs)));
        // $response->headers->set('Content-Type', 'application/json');

        // return $response;
        if (is_null($professeur)){
            return $this-> json(['message erreur'=>'Ce professeur n existe pas'], 404);
        }

        $data = json_decode($request->getContent(),true);
        $avis =  (new Avis())
            ->fromArray($data)
            ->setProfesseur($professeur);
        
        $errors = $validatorInterface->validate($avis);

        if ($errors->count()>0){
            return $this->json($this->formatErrors($errors),400);
        }
        $entityManager->persist($avis);
        $entityManager->flush();


        return $this-> json($avis, 201);
    }

    

}
