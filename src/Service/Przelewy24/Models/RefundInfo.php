<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 13:59
 */

namespace App\Service\Przelewy24\Models;


class RefundInfo
{
    /**
     * @var int
     */
    private $orderId;
    /**
     * @var string
     */
    private $sessionId;
    /**
     * @var int
     */
    private $batchId;
    /**
     * @var int
     */
    private $requestId;
    /**
     * @var string
     */
    private $date;
    /**
     * @var int
     */
    private $status;
    /**
     * @var string
     */
    private $statusTxt;
    /**
     * @var int
     */
    private $amount;

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return RefundInfo
     */
    public function setOrderId(int $orderId): RefundInfo
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSessionId(): string
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return RefundInfo
     */
    public function setSessionId(string $sessionId): RefundInfo
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBatchId(): int
    {
        return $this->batchId;
    }

    /**
     * @param int $batchId
     * @return RefundInfo
     */
    public function setBatchId(int $batchId): RefundInfo
    {
        $this->batchId = $batchId;
        return $this;
    }

    /**
     * @return int
     */
    public function getRequestId(): int
    {
        return $this->requestId;
    }

    /**
     * @param int $requestId
     * @return RefundInfo
     */
    public function setRequestId(int $requestId): RefundInfo
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return RefundInfo
     */
    public function setDate(string $date): RefundInfo
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return RefundInfo
     */
    public function setStatus(int $status): RefundInfo
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusTxt(): string
    {
        return $this->statusTxt;
    }

    /**
     * @param string $statusTxt
     * @return RefundInfo
     */
    public function setStatusTxt(string $statusTxt): RefundInfo
    {
        $this->statusTxt = $statusTxt;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return RefundInfo
     */
    public function setAmount(int $amount): RefundInfo
    {
        $this->amount = $amount;
        return $this;
    }


}