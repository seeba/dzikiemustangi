<?php

namespace App\Entity;

use App\SportCompetitions;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Event
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="time")
     */
    private $time;

    /**
     * @ORM\Column(type="date")
     */
    private $startDateOfEntries;

    /**
     * @ORM\Column(type="date")
     */
    private $endDateOfEntries;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updateAt;
    /**
     * @ORM\OneToMany(targetEntity="SportCompetition", mappedBy="event")
     */
    private $sportCompetitions;
    /**
     * @ORM\ManyToOne(targetEntity="EventType", inversedBy="events")
     */
    private $eventType;
    /**
     * @ORM\ManyToMany(targetEntity="Organizer", inversedBy="events")
     */
    private $organizers;
    /**
     * @ORM\OneToOne(targetEntity="Address", inversedBy="event")
     */
    private $address;


    public function __construct()
    {
        $this->sportCompetitions = new ArrayCollection();
        $this->organizers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getStartDateOfEntries(): ?\DateTimeInterface
    {
        return $this->startDateOfEntries;
    }

    public function setStartDateOfEntries(\DateTimeInterface $startDateOfEntries): self
    {
        $this->startDateOfEntries = $startDateOfEntries;

        return $this;
    }

    public function getEndDateOfEntries(): ?\DateTimeInterface
    {
        return $this->endDateOfEntries;
    }

    public function setEndDateOfEntries(\DateTimeInterface $endDateOfEntries): self
    {
        $this->endDateOfEntries = $endDateOfEntries;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(\DateTimeInterface $updateAt): self
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * @ORM\PrePersist()
     */
    public function onPrePersit()
    {

        $this->createdAt = new \DateTime();
    }

    /**
     * @ORM\PreUpdate()
     */
    public function onPreUpdate()
    {

        $this->updateAt = new \DateTime();
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
            $sportCompetition->setEvent($this);
        }

        return $this;
    }

    public function removeSportCompetition(SportCompetition $sportCompetition): self
    {
        if ($this->sportCompetitions->contains($sportCompetition)) {
            $this->sportCompetitions->removeElement($sportCompetition);
            // set the owning side to null (unless already changed)
            if ($sportCompetition->getEvent() === $this) {
                $sportCompetition->setEvent(null);
            }
        }

        return $this;
    }

    public function getEventType(): ?EventType
    {
        return $this->eventType;
    }

    public function setEventType(?EventType $eventType): self
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * @return Collection|Organizer[]
     */
    public function getOrganizers(): Collection
    {
        return $this->organizers;
    }

    public function addOrganizer(Organizer $organizer): self
    {
        if (!$this->organizers->contains($organizer)) {
            $this->organizers[] = $organizer;
        }

        return $this;
    }

    public function removeOrganizer(Organizer $organizer): self
    {
        if ($this->organizers->contains($organizer)) {
            $this->organizers->removeElement($organizer);
        }

        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): self
    {
        $this->address = $address;

        return $this;
    }


}
