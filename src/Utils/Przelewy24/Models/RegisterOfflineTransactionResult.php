<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 14:06
 */

namespace App\Utils\Przelewy24\Models;


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
}