<?php
/**
 * Created by PhpStorm.
 * User: seeba
 * Date: 06.03.19
 * Time: 13:46
 */

namespace App\Service\Przelewy24\Models;


class GeneralError
{
    /**
     * @var int
     */
    private $errorCode;
    /**
     * @var string
     */
    private $errorMessage;
    /**
     * @var string
     */
    private $errorMessagePl;

    /**
     * @return int
     */
    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    /**
     * @param int $errorCode
     * @return GeneralError
     */
    public function setErrorCode(int $errorCode): GeneralError
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return GeneralError
     */
    public function setErrorMessage(string $errorMessage): GeneralError
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessagePl(): string
    {
        return $this->errorMessagePl;
    }

    /**
     * @param string $errorMessagePl
     * @return GeneralError
     */
    public function setErrorMessagePl(string $errorMessagePl): GeneralError
    {
        $this->errorMessagePl = $errorMessagePl;
        return $this;
    }


}