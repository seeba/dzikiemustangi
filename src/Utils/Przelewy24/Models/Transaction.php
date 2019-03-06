<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 13:22
 */

namespace App\Utils\Przelewy24\Models;


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
}