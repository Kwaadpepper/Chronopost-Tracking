<?php

declare(strict_types=1);

namespace ChronopostTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelListSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:cancelListSkybillResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CancelListSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTracking\StructType\ResultListCancelSkybill|null
     */
    protected ?\ChronopostTracking\StructType\ResultListCancelSkybill $return = null;
    /**
     * Constructor method for cancelListSkybillResponse
     * @uses CancelListSkybillResponse::setReturn()
     * @param \ChronopostTracking\StructType\ResultListCancelSkybill $return
     */
    public function __construct(?\ChronopostTracking\StructType\ResultListCancelSkybill $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostTracking\StructType\ResultListCancelSkybill|null
     */
    public function getReturn(): ?\ChronopostTracking\StructType\ResultListCancelSkybill
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostTracking\StructType\ResultListCancelSkybill $return
     * @return \ChronopostTracking\StructType\CancelListSkybillResponse
     */
    public function setReturn(?\ChronopostTracking\StructType\ResultListCancelSkybill $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
