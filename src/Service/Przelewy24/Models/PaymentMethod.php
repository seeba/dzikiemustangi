<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 13:50
 */

namespace App\Service\Przelewy24\Models;


class PaymentMethod
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $id;
    /**
     * @var bool
     */
    private $status;
    /**
     * @var
     */
    private $avaibilityHours;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     */
    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getAvaibilityHours()
    {
        return $this->avaibilityHours;
    }

    /**
     * @param mixed $avaibilityHours
     */
    public function setAvaibilityHours($avaibilityHours): void
    {
        $this->avaibilityHours = $avaibilityHours;
    }


}