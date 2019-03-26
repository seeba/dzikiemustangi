<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 14:04
 */

namespace App\Service\Przelewy24\Models;


class BatchDetails
{
    /**
     * @var array
     */
    private $transactions;
    /**
     * @var array
     */
    private $refunds;
    /**
     * @var int
     */
    private $charges;
}