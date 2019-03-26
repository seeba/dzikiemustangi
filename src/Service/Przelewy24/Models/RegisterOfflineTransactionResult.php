<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 14:06
 */

namespace App\Service\Przelewy24\Models;


class RegisterOfflineTransactionResult
{
    /**
     * @var int
     */
    private $orderId;
    /**
     * @var string
     */
    private $statement;
    /**
     * @var string
     */
    private $session_id;
    /**
     * @var string
     */
    private $ban;
    /**
     * @var string
     */
    private $banOwner;
    /**
     * @var string
     */
    private $banOwnerAddress;
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
     * @return RegisterOfflineTransactionResult
     */
    public function setOrderId(int $orderId): RegisterOfflineTransactionResult
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        return $this->statement;
    }

    /**
     * @param string $statement
     * @return RegisterOfflineTransactionResult
     */
    public function setStatement(string $statement): RegisterOfflineTransactionResult
    {
        $this->statement = $statement;
        return $this;
    }

    /**
     * @return string
     */
    public function getSessionId(): string
    {
        return $this->session_id;
    }

    /**
     * @param string $session_id
     * @return RegisterOfflineTransactionResult
     */
    public function setSessionId(string $session_id): RegisterOfflineTransactionResult
    {
        $this->session_id = $session_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getBan(): string
    {
        return $this->ban;
    }

    /**
     * @param string $ban
     * @return RegisterOfflineTransactionResult
     */
    public function setBan(string $ban): RegisterOfflineTransactionResult
    {
        $this->ban = $ban;
        return $this;
    }

    /**
     * @return string
     */
    public function getBanOwner(): string
    {
        return $this->banOwner;
    }

    /**
     * @param string $banOwner
     * @return RegisterOfflineTransactionResult
     */
    public function setBanOwner(string $banOwner): RegisterOfflineTransactionResult
    {
        $this->banOwner = $banOwner;
        return $this;
    }

    /**
     * @return string
     */
    public function getBanOwnerAddress(): string
    {
        return $this->banOwnerAddress;
    }

    /**
     * @param string $banOwnerAddress
     * @return RegisterOfflineTransactionResult
     */
    public function setBanOwnerAddress(string $banOwnerAddress): RegisterOfflineTransactionResult
    {
        $this->banOwnerAddress = $banOwnerAddress;
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
     * @return RegisterOfflineTransactionResult
     */
    public function setAmount(int $amount): RegisterOfflineTransactionResult
    {
        $this->amount = $amount;
        return $this;
    }


}