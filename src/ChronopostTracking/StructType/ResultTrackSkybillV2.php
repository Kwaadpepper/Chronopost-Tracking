<?php

declare(strict_types=1);

namespace ChronopostTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultTrackSkybillV2 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultTrackSkybillV2 extends AbstractStructBase
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
     * The listEventInfoComp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTracking\StructType\ListEventInfoComps|null
     */
    protected ?\ChronopostTracking\StructType\ListEventInfoComps $listEventInfoComp = null;
    /**
     * Constructor method for resultTrackSkybillV2
     * @uses ResultTrackSkybillV2::setErrorCode()
     * @uses ResultTrackSkybillV2::setErrorMessage()
     * @uses ResultTrackSkybillV2::setListEventInfoComp()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \ChronopostTracking\StructType\ListEventInfoComps $listEventInfoComp
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?\ChronopostTracking\StructType\ListEventInfoComps $listEventInfoComp = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setListEventInfoComp($listEventInfoComp);
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
     * @return \ChronopostTracking\StructType\ResultTrackSkybillV2
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
     * @return \ChronopostTracking\StructType\ResultTrackSkybillV2
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
     * Get listEventInfoComp value
     * @return \ChronopostTracking\StructType\ListEventInfoComps|null
     */
    public function getListEventInfoComp(): ?\ChronopostTracking\StructType\ListEventInfoComps
    {
        return $this->listEventInfoComp;
    }
    /**
     * Set listEventInfoComp value
     * @param \ChronopostTracking\StructType\ListEventInfoComps $listEventInfoComp
     * @return \ChronopostTracking\StructType\ResultTrackSkybillV2
     */
    public function setListEventInfoComp(?\ChronopostTracking\StructType\ListEventInfoComps $listEventInfoComp = null): self
    {
        $this->listEventInfoComp = $listEventInfoComp;
        
        return $this;
    }
}
