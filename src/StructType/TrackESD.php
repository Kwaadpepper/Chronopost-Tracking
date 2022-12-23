<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackESD StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackESD
 * @subpackage Structs
 */
class TrackESD extends AbstractStructBase
{
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The esdNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $esdNumber = null;
    /**
     * Constructor method for trackESD
     * @uses TrackESD::setLanguage()
     * @uses TrackESD::setEsdNumber()
     * @param string $language
     * @param string $esdNumber
     */
    public function __construct(?string $language = null, ?string $esdNumber = null)
    {
        $this
            ->setLanguage($language)
            ->setEsdNumber($esdNumber);
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \StructType\TrackESD
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
    /**
     * Get esdNumber value
     * @return string|null
     */
    public function getEsdNumber(): ?string
    {
        return $this->esdNumber;
    }
    /**
     * Set esdNumber value
     * @param string $esdNumber
     * @return \StructType\TrackESD
     */
    public function setEsdNumber(?string $esdNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($esdNumber) && !is_string($esdNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($esdNumber, true), gettype($esdNumber)), __LINE__);
        }
        $this->esdNumber = $esdNumber;
        
        return $this;
    }
}
