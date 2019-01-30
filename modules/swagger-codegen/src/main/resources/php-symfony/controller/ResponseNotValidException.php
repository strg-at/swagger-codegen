<?php

namespace strg\Oeamtc\ContentAPI\Server\Controller;

use Exception;
use Throwable;

class ResponseNotValidException extends Exception
{
    private $validationErrors;

    /**
     * ParametersNotValidException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     * @param $validationErrors
     */
    public function __construct($message = '', $code = 0, Throwable $previous = null, $validationErrors = [])
    {
        parent::__construct($message, $code, $previous);
        $this->validationErrors = $validationErrors;
    }

    /**
     * @return mixed
     */
    public function getValidationErrors()
    {
        return $this->validationErrors;
    }
}
