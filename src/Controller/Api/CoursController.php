<?php

namespace App\Controller\Api;

use App\Entity\Cours;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CoursRepository;
use Symfony\Component\HttpFoundation\Request;


#[Route('/api/cours', name: 'api_cours_')]
class CoursController extends AbstractController
{
    use ControllerHelpers;

    #[Route('', name: 'list', methods:['GET'])]
    public function list(CoursRepository $repository): JsonResponse
    {
        $cours = $repository->findAll();
        
        // $response =  new Response;
        // $response->setStatusCode(Response::HTTP_OK);
        // $response->setContent(json_encode(array_map(fn ($professeur)=> $professeur->toArray(),$professeurs)));
        // $response->headers->set('Content-Type', 'application/json');

        // return $response;

        return $this-> json($cours, 200);
    }

    #[Route('/{id}', name: 'name', methods:['GET'])]
    public function show( Cours $cours =null): JsonResponse
    {        
        // $response =  new Response;
        // $response->setStatusCode(Response::HTTP_OK);
        // $response->setContent(json_encode(array_map(fn ($professeur)=> $professeur->toArray(),$professeurs)));
        // $response->headers->set('Content-Type', 'application/json');

        // return $response;
        if (is_null($cours)){
            return $this-> json(['message erreur'=>'Ce cours n existe pas'], 404);
        }
        return $this-> json($cours, 200);
    }

    #[Route('/{annee}/{mois}/{jour}', name: 'perDay', methods:['GET'])]
    public function showperDay(string $annee, string $mois ,string $jour ,CoursRepository $repository, Request $request): JsonResponse
    {
        $date = new \DateTime($annee."-".$mois."-".$jour);
        $date = $date->format('Y-m-d');
        
        $cours = $repository->createQueryBuilder('cours')
            ->select("cours.id, cours.dateHeureDebut, cours.dateHeureFin, cours.type, professeur.nom, professeur.prenom, salle.numero, matiere.titre, matiere.reference")
            ->leftJoin('cours.professeur', 'professeur')
            ->leftJoin('cours.matiere', 'matiere')
            ->leftJoin('cours.salle', 'salle')
            ->where("cours.dateHeureDebut BETWEEN '$date 00:00:00' AND '$date 23:59:59'")
            ->OrderBy('cours.dateHeureDebut', 'ASC')
            ->getQuery()
            ->getResult();

        return $this->json($cours, 200);
    }

}
