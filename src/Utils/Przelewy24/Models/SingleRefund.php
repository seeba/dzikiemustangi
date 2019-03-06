<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 13:57
 */

namespace App\Utils\Przelewy24\Models;


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
}