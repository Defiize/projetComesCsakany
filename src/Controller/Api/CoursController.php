<?php

namespace App\Controller\Api;

use App\Entity\Cours;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CoursRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;

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
    public function showperDay(string $annee, string $mois ,string $jour ,CoursRepository $repository): JsonResponse
    {
        $date = new \DateTime($annee."-".$mois."-".$jour);
        $date = $date->format('Y-m-d');

        $cours= $repository->findAll();
        $index =0;
        foreach($cours as $cour){
            if ($cour->getDateHeureDebut()->format('Y-m-d') !== $date){
                array_splice($cours,$index, 1 );
            } else{
                $index = $index +1;
            }            
        }
        return $this->json($cours, 200);
    }

    #[Route('/{annee1}/{mois1}/{jour1}/{annee2}/{mois2}/{jour2}', name: 'between', methods:['GET'])]
    public function showBetweenTwoDate(string $annee1, string $mois1 ,string $jour1,string $annee2, string $mois2 ,string $jour2 ,CoursRepository $repository): JsonResponse
    {
        $date1 = new \DateTime($annee1."-".$mois1."-".$jour1);
        $date1 = $date1->format('Y-m-d');
        $date2 = new \DateTime($annee2."-".$mois2."-".$jour2);
        $date2 = $date2->format('Y-m-d');        
        $cours= $repository->findAll();
        $index =0;
        foreach($cours as $cour){
            if (($cour->getDateHeureDebut()->format('Y-m-d') < $date1)||($cour->getDateHeureDebut()->format('Y-m-d') > $date2)){
                array_splice($cours,$index, 1 );
            } else {
                $index = $index +1;
            }
        }
        return $this->json($cours, 200);
    }

    #[Route('/like/{id}', name: 'addLike', methods:['GET'])]
    public function addLike(Cours $cours, EntityManagerInterface $entityManager): JsonResponse
    {
        $cours->addLike();
        $entityManager->persist($cours);
        $entityManager->flush();

        return $this->json($cours, 200);
    }
    #[Route('/unlike/{id}', name: 'removeLike', methods:['GET'])]
    public function removeLike(Cours $cours, EntityManagerInterface $entityManager): JsonResponse
    {
        $cours->removeLike();
        $entityManager->persist($cours);
        $entityManager->flush();
        
        return $this->json($cours, 200);
    }
}
