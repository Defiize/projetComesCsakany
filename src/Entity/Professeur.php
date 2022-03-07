<?php

namespace App\Entity;

use App\Repository\ProfesseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProfesseurRepository::class)]
#[UniqueEntity("mail")]
class Professeur implements \JsonSerializable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length:255)]
    private $nom;
    
    #[ORM\Column(type: 'string', length:255)]
    private $prenom;

    #[ORM\Column(type: 'string', length:255, unique:true)]
    #[Assert\Email]
    private $mail;


    #[ORM\OneToMany(mappedBy: 'professeur', targetEntity: Avis::class, orphanRemoval: true)]
    private $avis;

    #[ORM\ManyToMany(targetEntity: Matiere::class, inversedBy: 'professeurs')]
    private $matieres;

    public function __construct()
    {
        $this->avis = new ArrayCollection();
        $this->matieres = new ArrayCollection();
    }
    public function __toString()
    {
        return sprintf('%s %s (%s)', $this->prenom, $this->nom, $this->mail);
    }
    public function jsonSerialize(): mixed
    {
        return [
            'id'=>$this->id,
            'prenom'=>$this->prenom,
            'nom'=>$this->nom,
            'email'=>$this->mail,
            'matiere'=>$this->matieres->toArray(), 
            'avis'=>$this->avis->toArray(),
        ];
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getNom(): ?string
    {
        return $this->nom;
    }
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }
    public function getMail(): ?string
    {
        return $this->mail;
    }
    public function setMail(string $mail): self
    {
        $this->mail=$mail;
        return $this;
    }
    public function setNom(string $nom): self
    {
        $this->nom=$nom;
        return $this;
    }
    public function setPrenom(string $prenom): self
    {
        $this->prenom=$prenom;
        return $this;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvi(Avis $avi): self
    {
        if (!$this->avis->contains($avi)) {
            $this->avis[] = $avi;
            $avi->setProfesseur($this);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): self
    {
        if ($this->avis->removeElement($avi)) {
            // set the owning side to null (unless already changed)
            if ($avi->getProfesseur() === $this) {
                $avi->setProfesseur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Matiere>
     */
    public function getMatieres(): Collection
    {
        return $this->matieres;
    }

    public function addMatiere(Matiere $matiere): self
    {
        if (!$this->matieres->contains($matiere)) {
            $this->matieres[] = $matiere;
        }

        return $this;
    }

    public function removeMatiere(Matiere $matiere): self
    {
        $this->matieres->removeElement($matiere);

        return $this;
    }
}
