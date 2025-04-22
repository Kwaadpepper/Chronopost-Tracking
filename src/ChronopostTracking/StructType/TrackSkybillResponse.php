<?php

declare(strict_types=1);

namespace ChronopostTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSkybillResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TrackSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTracking\StructType\ResultTrackSkybill|null
     */
    protected ?\ChronopostTracking\StructType\ResultTrackSkybill $return = null;
    /**
     * Constructor method for trackSkybillResponse
     * @uses TrackSkybillResponse::setReturn()
     * @param \ChronopostTracking\StructType\ResultTrackSkybill $return
     */
    public function __construct(?\ChronopostTracking\StructType\ResultTrackSkybill $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostTracking\StructType\ResultTrackSkybill|null
     */
    public function getReturn(): ?\ChronopostTracking\StructType\ResultTrackSkybill
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostTracking\StructType\ResultTrackSkybill $return
     * @return \ChronopostTracking\StructType\TrackSkybillResponse
     */
    public function setReturn(?\ChronopostTracking\StructType\ResultTrackSkybill $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
