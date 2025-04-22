<?php

declare(strict_types=1);

namespace ChronopostTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPODResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:searchPODResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchPODResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTracking\StructType\ResultSearchPOD|null
     */
    protected ?\ChronopostTracking\StructType\ResultSearchPOD $return = null;
    /**
     * Constructor method for searchPODResponse
     * @uses SearchPODResponse::setReturn()
     * @param \ChronopostTracking\StructType\ResultSearchPOD $return
     */
    public function __construct(?\ChronopostTracking\StructType\ResultSearchPOD $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostTracking\StructType\ResultSearchPOD|null
     */
    public function getReturn(): ?\ChronopostTracking\StructType\ResultSearchPOD
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostTracking\StructType\ResultSearchPOD $return
     * @return \ChronopostTracking\StructType\SearchPODResponse
     */
    public function setReturn(?\ChronopostTracking\StructType\ResultSearchPOD $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
