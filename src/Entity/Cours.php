<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use App\Validator\EstDateDispo;
use App\Validator\ProfesseurLibre;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
#[EstDateDispo()]
#[ProfesseurLibre()]
class Cours implements \JsonSerializable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $dateHeureDebut;

    #[ORM\Column(type: 'datetime')]
    private $dateHeureFin;

    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    private $type;

    #[ORM\ManyToOne(targetEntity: Professeur::class, inversedBy: 'cours')]
    #[ORM\JoinColumn(nullable: false)]
    private $professeur;

    #[ORM\ManyToOne(targetEntity: Matiere::class, inversedBy: 'cours')]
    #[ORM\JoinColumn(nullable: false)]
    private $matiere;

    #[ORM\ManyToOne(targetEntity: Salle::class, inversedBy: 'cours')]
    #[ORM\JoinColumn(nullable: false)]
    private $salle;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $nbLike;

    // public function __construct()
    // {
    //     $this->nbLike = 0;
    // }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateHeureDebut(): ?\DateTimeInterface
    {
        return $this->dateHeureDebut;
    }

    public function addLike(){
        if(isset($this->nbLike)){
            $this->nbLike++;
        }
        else{
            $this->nbLike = 1;
        }
    }
    public function removeLike(){
        if(isset($this->nbLike) && $this->nbLike>0){
            $this->nbLike--;
        }
        else{
            $this->nbLike = 0;
        }
    }

    public function setDateHeureDebut(\DateTimeInterface $dateHeureDebut): self
    {
        $this->dateHeureDebut = $dateHeureDebut;

        return $this;
    }

    public function getDateHeureFin(): ?\DateTimeInterface
    {
        return $this->dateHeureFin;
    }

    public function setDateHeureFin(\DateTimeInterface $dateHeureFin): self
    {
        $this->dateHeureFin = $dateHeureFin;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getProfesseur(): ?Professeur
    {
        return $this->professeur;
    }

    public function setProfesseur(?Professeur $professeur): self
    {
        $this->professeur = $professeur;

        return $this;
    }

    public function getMatiere(): ?Matiere
    {
        return $this->matiere;
    }

    public function setMatiere(?Matiere $matiere): self
    {
        $this->matiere = $matiere;

        return $this;
    }

    public function getSalle(): ?Salle
    {
        return $this->salle;
    }

    public function setSalle(?Salle $salle): self
    {
        $this->salle = $salle;

        return $this;
    }
    public function __toString()
    {
        return sprintf('%s %s (%s) %s', $this->salle, $this->type, $this->professeur, $this->matiere);
    }

    public function jsonSerialize(): mixed
    {

        return [
            'id'=>$this->id,
            'dateHeureDebut'=>$this->dateHeureDebut,
            'dateHeureFin'=>$this->dateHeureFin,
            'type'=>$this->type,
            'professeur'=>$this->professeur, 
            'matiere'=>$this->matiere,
            'salle'=>$this->salle,
            'nbLike'=>$this->nbLike,
        ];
    }

    public function getNbLike(): ?int
    {
        return $this->nbLike;
    }

    public function setNbLike(?int $nbLike): self
    {
        $this->nbLike = $nbLike;

        return $this;
    }
}
