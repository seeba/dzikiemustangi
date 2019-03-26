<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 13:53
 */

namespace App\Service\Przelewy24\Models;


class CurrencyExchange
{
    /**
     * @var string
     */
    private $code;
    /**
     * @var float
     */
    private $exchng;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return CurrencyExchange
     */
    public function setCode(string $code): CurrencyExchange
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return float
     */
    public function getExchng(): float
    {
        return $this->exchng;
    }

    /**
     * @param float $exchng
     * @return CurrencyExchange
     */
    public function setExchng(float $exchng): CurrencyExchange
    {
        $this->exchng = $exchng;
        return $this;
    }



}