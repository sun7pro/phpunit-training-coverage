<?php

namespace App;

class UsernameValidation
{
    const MIN_LENGTH = 1;
    const MAX_LENGTH = 20;

    private $errorMessage = '';

    public function isValid($username)
    {
        // Validate length
        $stringLength = strlen($username);
        if ($stringLength < self::MIN_LENGTH) {
            $this->errorMessage = 'Minimum length is ' . self::MIN_LENGTH;
            return false;
        }

        if ($stringLength > self::MAX_LENGTH) {
            $this->errorMessage = 'Maximum length is ' . self::MAX_LENGTH;
            return false;
        }

        // Allow - but not at begin or end of string
        $dashPosition = strpos($username, '-');
        if ($dashPosition === 0 || $dashPosition === $stringLength - 1) {
            $this->errorMessage = '- cannot appear at begin or end of name';
            return false;
        }

        // Allow only single -
        if (strpos($username, '--') !== false) {
            $this->errorMessage = 'Only single - is allowed';
            return false;
        }

        // a-z code 97 -> 122
        // A-Z code 65 -> 90
        // 0-9 code 48 -> 57
        // - code = 45
        for ($i = 0; $i < $stringLength; ++$i) {
            $charCode = ord($username[$i]);
            $isValidChar = ($charCode >= 97 && $charCode <= 122)
                || ($charCode >= 65 && $charCode <= 90)
                || ($charCode >= 48 && $charCode <= 57)
                || $charCode == 45;
            if (!$isValidChar) {
                $this->errorMessage = 'Invalid character. Use only letters, digits and -';
                return false;
            }
        }

        return true;
    }

    public function getMessage()
    {
        return $this->errorMessage;
    }
}
