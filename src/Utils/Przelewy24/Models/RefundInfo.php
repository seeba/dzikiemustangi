<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 13:59
 */

namespace App\Utils\Przelewy24\Models;


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
}