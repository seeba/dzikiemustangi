<?php

namespace App\Entity;

use App\Event;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SportCompetitionRepository")
 */
class SportCompetition
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="sportCompetitions")
     */
    private $event;

    /**
     * @ORM\ManyToMany(targetEntity="Participant", inversedBy="sportCompetitions")
     */
    private $participants;
    /**
     * @ORM\ManyToOne(targetEntity="SportCompetitionType", inversedBy="sportCompetitions")
     */
    private $sportCompetitionType;

    public function __construct()
    {
        $this->participants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;

        return $this;
    }

    /**
     * @return Collection|Participant[]
     */
    public function getParticipants(): Collection
    {
        return $this->participants;
    }

    public function addParticipant(Participant $participant): self
    {
        if (!$this->participants->contains($participant)) {
            $this->participants[] = $participant;
        }

        return $this;
    }

    public function removeParticipant(Participant $participant): self
    {
        if ($this->participants->contains($participant)) {
            $this->participants->removeElement($participant);
        }

        return $this;
    }

    public function getSportCompetitionType(): ?SportCompetitionType
    {
        return $this->sportCompetitionType;
    }

    public function setSportCompetitionType(?SportCompetitionType $sportCompetitionType): self
    {
        $this->sportCompetitionType = $sportCompetitionType;

        return $this;
    }


}
