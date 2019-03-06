<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 13:50
 */

namespace App\Utils\Przelewy24\Models;


class PaymentMethod
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $id;
    /**
     * @var bool
     */
    private $status;
    /**
     * @var
     */
    private $avaibilityHours;
}