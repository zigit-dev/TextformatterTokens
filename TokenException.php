<?php namespace ProcessWire;

use Exception;

/**
 * Token exception.
 */
class TokenException extends Exception {

    /**
     * Text used to replace token on exception.
     *
     * @var string|null
     *
     */
    private $tokenReplacement;

    /**
     * Constructor.
     *
     * @param string $message
     *   Exception message.
     * @param string|null $tokenReplacement
     *   If set, used token will be replaced with this value on exception.
     *
     */
    public function __construct($message, $tokenReplacement = null) {
        parent::__construct($message);
        $this->tokenReplacement = $tokenReplacement;
    }

    /**
     * Gets token replacement.
     *
     * @return string|null
     *
     */
    public function getTokenReplacement() {
        return $this->tokenReplacement;
    }
}
