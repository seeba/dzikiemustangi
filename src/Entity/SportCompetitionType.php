<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SportCompetitionTypeRepository")
 */
class SportCompetitionType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\OneToMany(targetEntity="SportCompetition", mappedBy="sportCompetitionType")
     */
    private $sportCompetitions;

    public function __construct()
    {
        $this->sportCompetitions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|SportCompetition[]
     */
    public function getSportCompetitions(): Collection
    {
        return $this->sportCompetitions;
    }

    public function addSportCompetition(SportCompetition $sportCompetition): self
    {
        if (!$this->sportCompetitions->contains($sportCompetition)) {
            $this->sportCompetitions[] = $sportCompetition;
            $sportCompetition->setSportCompetitionType($this);
        }

        return $this;
    }

    public function removeSportCompetition(SportCompetition $sportCompetition): self
    {
        if ($this->sportCompetitions->contains($sportCompetition)) {
            $this->sportCompetitions->removeElement($sportCompetition);
            // set the owning side to null (unless already changed)
            if ($sportCompetition->getSportCompetitionType() === $this) {
                $sportCompetition->setSportCompetitionType(null);
            }
        }

        return $this;
    }
}
