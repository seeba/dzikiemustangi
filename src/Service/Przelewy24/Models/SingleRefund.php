<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 13:57
 */

namespace App\Service\Przelewy24\Models;


class SingleRefund
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
     * @var bool
     */
    private $status;
    /**
     * @var string
     */
    private $error;

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return SingleRefund
     */
    public function setOrderId(int $orderId): SingleRefund
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
     * @return SingleRefund
     */
    public function setSessionId(string $sessionId): SingleRefund
    {
        $this->sessionId = $sessionId;
        return $this;
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
     * @return SingleRefund
     */
    public function setStatus(bool $status): SingleRefund
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * @param string $error
     * @return SingleRefund
     */
    public function setError(string $error): SingleRefund
    {
        $this->error = $error;
        return $this;
    }


}