<?php

declare(strict_types=1);

namespace ChronopostTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackWithSenderRefResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackWithSenderRefResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TrackWithSenderRefResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTracking\StructType\ResultTrackWithSenderRef|null
     */
    protected ?\ChronopostTracking\StructType\ResultTrackWithSenderRef $return = null;
    /**
     * Constructor method for trackWithSenderRefResponse
     * @uses TrackWithSenderRefResponse::setReturn()
     * @param \ChronopostTracking\StructType\ResultTrackWithSenderRef $return
     */
    public function __construct(?\ChronopostTracking\StructType\ResultTrackWithSenderRef $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostTracking\StructType\ResultTrackWithSenderRef|null
     */
    public function getReturn(): ?\ChronopostTracking\StructType\ResultTrackWithSenderRef
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostTracking\StructType\ResultTrackWithSenderRef $return
     * @return \ChronopostTracking\StructType\TrackWithSenderRefResponse
     */
    public function setReturn(?\ChronopostTracking\StructType\ResultTrackWithSenderRef $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
