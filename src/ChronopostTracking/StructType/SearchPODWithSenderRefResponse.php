<?php

declare(strict_types=1);

namespace ChronopostTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPODWithSenderRefResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:searchPODWithSenderRefResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchPODWithSenderRefResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTracking\StructType\ResultSearchPODWithSenderRef|null
     */
    protected ?\ChronopostTracking\StructType\ResultSearchPODWithSenderRef $return = null;
    /**
     * Constructor method for searchPODWithSenderRefResponse
     * @uses SearchPODWithSenderRefResponse::setReturn()
     * @param \ChronopostTracking\StructType\ResultSearchPODWithSenderRef $return
     */
    public function __construct(?\ChronopostTracking\StructType\ResultSearchPODWithSenderRef $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostTracking\StructType\ResultSearchPODWithSenderRef|null
     */
    public function getReturn(): ?\ChronopostTracking\StructType\ResultSearchPODWithSenderRef
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostTracking\StructType\ResultSearchPODWithSenderRef $return
     * @return \ChronopostTracking\StructType\SearchPODWithSenderRefResponse
     */
    public function setReturn(?\ChronopostTracking\StructType\ResultSearchPODWithSenderRef $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
