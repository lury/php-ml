<?php

declare (strict_types = 1);

namespace Phpml\Exception;

class InvalidArgumentException extends \Exception
{
    /**
     * @return InvalidArgumentException
     */
    public static function arraySizeNotMatch()
    {
        return new self('Size of given arrays not match');
    }

    /**
     * @param $name
     *
     * @return InvalidArgumentException
     */
    public static function percentNotInRange($name)
    {
        return new self(sprintf('%s must be between 0.0 and 1.0', $name));
    }

    /**
     * @return InvalidArgumentException
     */
    public static function arrayCantBeEmpty()
    {
        return new self('The array has zero elements');
    }

    /**
     * @param int $minimumSize
     *
     * @return InvalidArgumentException
     */
    public static function arraySizeToSmall($minimumSize = 2)
    {
        return new self(sprintf('The array must have at least %s elements', $minimumSize));
    }

    /**
     * @return InvalidArgumentException
     */
    public static function matrixDimensionsDidNotMatch()
    {
        return new self('Matrix dimensions did not match');
    }

    /**
     * @return InvalidArgumentException
     */
    public static function inconsistentMatrixSupplied()
    {
        return new self('Inconsistent matrix aupplied');
    }

    /**
     * @return InvalidArgumentException
     */
    public static function invalidClustersNumber()
    {
        return new self('Invalid clusters number');
    }

    /**
     * @return InvalidArgumentException
     */
    public static function invalidStopWordsLanguage(string $language)
    {
        return new self(sprintf('Can\'t find %s language for StopWords', $language));
    }
}
