<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SalleRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/api/salles', name: 'api_salles_')]
class SalleController extends AbstractController
{
    #[Route('', name: 'list', methods:['GET'])]
    public function list(SalleRepository $repository): JsonResponse
    {
        $salles = $repository->findAll();
        
        // $response =  new Response;
        // $response->setStatusCode(Response::HTTP_OK);
        // $response->setContent(json_encode(array_map(fn ($professeur)=> $professeur->toArray(),$professeurs)));
        // $response->headers->set('Content-Type', 'application/json');

        // return $response;

        return $this-> json($salles, 200);
    }
}
