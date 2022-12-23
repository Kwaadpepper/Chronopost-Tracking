<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultListCancelSkybill StructType
 * @subpackage Structs
 */
class ResultListCancelSkybill extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int|null
     */
    protected ?int $errorCode = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The skybills
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    protected ?array $skybills = null;
    /**
     * The statusCode
     * @var int|null
     */
    protected ?int $statusCode = null;
    /**
     * Constructor method for resultListCancelSkybill
     * @uses ResultListCancelSkybill::setErrorCode()
     * @uses ResultListCancelSkybill::setErrorMessage()
     * @uses ResultListCancelSkybill::setSkybills()
     * @uses ResultListCancelSkybill::setStatusCode()
     * @param int $errorCode
     * @param string $errorMessage
     * @param string[] $skybills
     * @param int $statusCode
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?array $skybills = null, ?int $statusCode = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setSkybills($skybills)
            ->setStatusCode($statusCode);
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \StructType\ResultListCancelSkybill
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \StructType\ResultListCancelSkybill
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get skybills value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getSkybills(): ?array
    {
        return isset($this->skybills) ? $this->skybills : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSkybills method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSkybills method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSkybillsForArrayConstraintsFromSetSkybills(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $resultListCancelSkybillSkybillsItem) {
            // validation for constraint: itemType
            if (!is_string($resultListCancelSkybillSkybillsItem)) {
                $invalidValues[] = is_object($resultListCancelSkybillSkybillsItem) ? get_class($resultListCancelSkybillSkybillsItem) : sprintf('%s(%s)', gettype($resultListCancelSkybillSkybillsItem), var_export($resultListCancelSkybillSkybillsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybills property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set skybills value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param string[] $skybills
     * @return \StructType\ResultListCancelSkybill
     */
    public function setSkybills(?array $skybills = null): self
    {
        // validation for constraint: array
        if ('' !== ($skybillsArrayErrorMessage = self::validateSkybillsForArrayConstraintsFromSetSkybills($skybills))) {
            throw new InvalidArgumentException($skybillsArrayErrorMessage, __LINE__);
        }
        if (is_null($skybills) || (is_array($skybills) && empty($skybills))) {
            unset($this->skybills);
        } else {
            $this->skybills = $skybills;
        }
        
        return $this;
    }
    /**
     * Add item to skybills value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\ResultListCancelSkybill
     */
    public function addToSkybills(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The skybills property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybills[] = $item;
        
        return $this;
    }
    /**
     * Get statusCode value
     * @return int|null
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }
    /**
     * Set statusCode value
     * @param int $statusCode
     * @return \StructType\ResultListCancelSkybill
     */
    public function setStatusCode(?int $statusCode = null): self
    {
        // validation for constraint: int
        if (!is_null($statusCode) && !(is_int($statusCode) || ctype_digit($statusCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusCode, true), gettype($statusCode)), __LINE__);
        }
        $this->statusCode = $statusCode;
        
        return $this;
    }
}
