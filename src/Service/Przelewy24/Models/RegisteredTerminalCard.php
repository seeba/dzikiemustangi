<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 14:09
 */

namespace App\Service\Przelewy24\Models;


class RegisteredTerminalCard
{

    private $cToken;

    private $ReceiptHeader;

    private $ReceiptText;

    private $ReceiptFooter;

    /**
     * @return mixed
     */
    public function getCToken()
    {
        return $this->cToken;
    }

    /**
     * @param mixed $cToken
     * @return RegisteredTerminalCard
     */
    public function setCToken($cToken)
    {
        $this->cToken = $cToken;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceiptHeader()
    {
        return $this->ReceiptHeader;
    }

    /**
     * @param mixed $ReceiptHeader
     * @return RegisteredTerminalCard
     */
    public function setReceiptHeader($ReceiptHeader)
    {
        $this->ReceiptHeader = $ReceiptHeader;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceiptText()
    {
        return $this->ReceiptText;
    }

    /**
     * @param mixed $ReceiptText
     * @return RegisteredTerminalCard
     */
    public function setReceiptText($ReceiptText)
    {
        $this->ReceiptText = $ReceiptText;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceiptFooter()
    {
        return $this->ReceiptFooter;
    }

    /**
     * @param mixed $ReceiptFooter
     * @return RegisteredTerminalCard
     */
    public function setReceiptFooter($ReceiptFooter)
    {
        $this->ReceiptFooter = $ReceiptFooter;
        return $this;
    }




}