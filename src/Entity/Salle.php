<?php

namespace App\Entity;

use App\Repository\SalleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use App\Entity\Cours;


#[ORM\Entity(repositoryClass: SalleRepository::class)]
#[UniqueEntity('numero', message: 'Cette salle existe déja.',)]
class Salle implements \JsonSerializable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer', unique: true)]
    private $numero;

    #[ORM\OneToMany(mappedBy: 'salle', targetEntity: Cours::class)]
    private $cours;

    public function __construct()
    {
        $this->cours = new ArrayCollection();
    }

    public function __toString()
    {
        return sprintf('%s', $this->numero);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * @return Collection<int, Cours>
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCour(Cours $cour): self
    {
        if (!$this->cours->contains($cour)) {
            $this->cours[] = $cour;
            $cour->setSalle($this);
        }

        return $this;
    }

    public function removeCour(Cours $cour): self
    {
        if ($this->cours->removeElement($cour)) {
            // set the owning side to null (unless already changed)
            if ($cour->getSalle() === $this) {
                $cour->setSalle(null);
            }
        }

        return $this;
    }
    public function jsonSerialize(): mixed
    {
        $arrayCours = new ArrayCollection();
        foreach ($this->cours as $cour) {
            if ($cour === null) {
                $arrayCours->add(null);
            } else {
                $arrayCours->add(['id' => $cour->getId(), 'type' => $cour->getType()]);
            }
        };
        return [
            'id' => $this->id,
            'numero' => $this->numero,
            'cours' => $arrayCours->toArray(),
        ];
    }
}
