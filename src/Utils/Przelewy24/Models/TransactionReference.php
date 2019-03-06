<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 14:02
 */

namespace App\Utils\Przelewy24\Models;


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

}