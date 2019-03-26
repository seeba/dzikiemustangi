<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 13:22
 */

namespace App\Service\Przelewy24\Models;


class Transaction
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
     * @example 0- brak wpłaty 1 - przedpłata 2- dokonana 3 - zwrócona
     */
    private $status;
    /**
     * @var int
     */
    private $amount;
    /**
     * @var string
     */
    private $currency;
    /**
     * @var string
     */
    private $date;
    /**
     * @var string
     */
    private $dateOfTransaction;
    /**
     * @var string
     */
    private $clientEmail;
    /**
     * @var string
     */
    private $accountMD5;
    /**
     * @var int
     */
    private $paymentMethod;

    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $clientAddress;

    /**
     * @var string
     */
    private $clientCity;

    /**
     * @var string
     */
    private $clientName;

    /**
     * @var string
     */
    private $clientPostcode;
    /**
     * @var int
     */
    private $batchId;
    /**
     * @var int
     */
    private $fee;
    /**
     * @var string
     */
    private $statement;

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return Transaction
     */
    public function setOrderId(int $orderId): Transaction
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
     * @return Transaction
     */
    public function setSessionId(string $sessionId): Transaction
    {
        $this->sessionId = $sessionId;
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
     * @return Transaction
     */
    public function setStatus(int $status): Transaction
    {
        $this->status = $status;
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
     * @return Transaction
     */
    public function setAmount(int $amount): Transaction
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return Transaction
     */
    public function setCurrency(string $currency): Transaction
    {
        $this->currency = $currency;
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
     * @return Transaction
     */
    public function setDate(string $date): Transaction
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateOfTransaction(): string
    {
        return $this->dateOfTransaction;
    }

    /**
     * @param string $dateOfTransaction
     * @return Transaction
     */
    public function setDateOfTransaction(string $dateOfTransaction): Transaction
    {
        $this->dateOfTransaction = $dateOfTransaction;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientEmail(): string
    {
        return $this->clientEmail;
    }

    /**
     * @param string $clientEmail
     * @return Transaction
     */
    public function setClientEmail(string $clientEmail): Transaction
    {
        $this->clientEmail = $clientEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountMD5(): string
    {
        return $this->accountMD5;
    }

    /**
     * @param string $accountMD5
     * @return Transaction
     */
    public function setAccountMD5(string $accountMD5): Transaction
    {
        $this->accountMD5 = $accountMD5;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentMethod(): int
    {
        return $this->paymentMethod;
    }

    /**
     * @param int $paymentMethod
     * @return Transaction
     */
    public function setPaymentMethod(int $paymentMethod): Transaction
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Transaction
     */
    public function setDescription(string $description): Transaction
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientAddress(): string
    {
        return $this->clientAddress;
    }

    /**
     * @param string $clientAddress
     * @return Transaction
     */
    public function setClientAddress(string $clientAddress): Transaction
    {
        $this->clientAddress = $clientAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientCity(): string
    {
        return $this->clientCity;
    }

    /**
     * @param string $clientCity
     * @return Transaction
     */
    public function setClientCity(string $clientCity): Transaction
    {
        $this->clientCity = $clientCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientName(): string
    {
        return $this->clientName;
    }

    /**
     * @param string $clientName
     * @return Transaction
     */
    public function setClientName(string $clientName): Transaction
    {
        $this->clientName = $clientName;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientPostcode(): string
    {
        return $this->clientPostcode;
    }

    /**
     * @param string $clientPostcode
     * @return Transaction
     */
    public function setClientPostcode(string $clientPostcode): Transaction
    {
        $this->clientPostcode = $clientPostcode;
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
     * @return Transaction
     */
    public function setBatchId(int $batchId): Transaction
    {
        $this->batchId = $batchId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFee(): int
    {
        return $this->fee;
    }

    /**
     * @param int $fee
     * @return Transaction
     */
    public function setFee(int $fee): Transaction
    {
        $this->fee = $fee;
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
     * @return Transaction
     */
    public function setStatement(string $statement): Transaction
    {
        $this->statement = $statement;
        return $this;
    }


}