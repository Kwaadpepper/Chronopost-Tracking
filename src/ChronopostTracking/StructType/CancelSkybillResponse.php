<?php

declare(strict_types=1);

namespace ChronopostTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:cancelSkybillResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CancelSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTracking\StructType\ResultCancelSkybill|null
     */
    protected ?\ChronopostTracking\StructType\ResultCancelSkybill $return = null;
    /**
     * Constructor method for cancelSkybillResponse
     * @uses CancelSkybillResponse::setReturn()
     * @param \ChronopostTracking\StructType\ResultCancelSkybill $return
     */
    public function __construct(?\ChronopostTracking\StructType\ResultCancelSkybill $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostTracking\StructType\ResultCancelSkybill|null
     */
    public function getReturn(): ?\ChronopostTracking\StructType\ResultCancelSkybill
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostTracking\StructType\ResultCancelSkybill $return
     * @return \ChronopostTracking\StructType\CancelSkybillResponse
     */
    public function setReturn(?\ChronopostTracking\StructType\ResultCancelSkybill $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
