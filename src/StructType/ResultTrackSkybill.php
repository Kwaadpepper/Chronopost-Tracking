<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultTrackSkybill StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultTrackSkybill extends AbstractStructBase
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
     * The listEvents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ListEvents|null
     */
    protected ?\StructType\ListEvents $listEvents = null;
    /**
     * Constructor method for resultTrackSkybill
     * @uses ResultTrackSkybill::setErrorCode()
     * @uses ResultTrackSkybill::setErrorMessage()
     * @uses ResultTrackSkybill::setListEvents()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \StructType\ListEvents $listEvents
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?\StructType\ListEvents $listEvents = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setListEvents($listEvents);
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
     * @return \StructType\ResultTrackSkybill
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
     * @return \StructType\ResultTrackSkybill
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
     * Get listEvents value
     * @return \StructType\ListEvents|null
     */
    public function getListEvents(): ?\StructType\ListEvents
    {
        return $this->listEvents;
    }
    /**
     * Set listEvents value
     * @param \StructType\ListEvents $listEvents
     * @return \StructType\ResultTrackSkybill
     */
    public function setListEvents(?\StructType\ListEvents $listEvents = null): self
    {
        $this->listEvents = $listEvents;
        
        return $this;
    }
}
