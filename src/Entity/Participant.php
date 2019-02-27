<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParticipantRepository")
 */
class Participant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\ManyToMany(targetEntity="SportCompetition", mappedBy="participants")
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
            $sportCompetition->addParticipant($this);
        }

        return $this;
    }

    public function removeSportCompetition(SportCompetition $sportCompetition): self
    {
        if ($this->sportCompetitions->contains($sportCompetition)) {
            $this->sportCompetitions->removeElement($sportCompetition);
            $sportCompetition->removeParticipant($this);
        }

        return $this;
    }
}
