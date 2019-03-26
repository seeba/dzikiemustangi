<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 14:02
 */

namespace App\Service\Przelewy24\Models;


class TransactionReference
{
    /**
     * @var string
     */
    private $refId;
    /**
     * @var int
     */
    private $bin;
    /**
     * @var string
     */
    private $mask;
    /**
     * @var string
     */
    private $cardType;

    /**
     * @return string
     */
    public function getRefId(): string
    {
        return $this->refId;
    }

    /**
     * @param string $refId
     * @return TransactionReference
     */
    public function setRefId(string $refId): TransactionReference
    {
        $this->refId = $refId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBin(): int
    {
        return $this->bin;
    }

    /**
     * @param int $bin
     * @return TransactionReference
     */
    public function setBin(int $bin): TransactionReference
    {
        $this->bin = $bin;
        return $this;
    }

    /**
     * @return string
     */
    public function getMask(): string
    {
        return $this->mask;
    }

    /**
     * @param string $mask
     * @return TransactionReference
     */
    public function setMask(string $mask): TransactionReference
    {
        $this->mask = $mask;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardType(): string
    {
        return $this->cardType;
    }

    /**
     * @param string $cardType
     * @return TransactionReference
     */
    public function setCardType(string $cardType): TransactionReference
    {
        $this->cardType = $cardType;
        return $this;
    }



}