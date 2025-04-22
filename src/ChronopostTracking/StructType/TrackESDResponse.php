<?php

declare(strict_types=1);

namespace ChronopostTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackESDResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackESDResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TrackESDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTracking\StructType\ResultTrackSkybillV2|null
     */
    protected ?\ChronopostTracking\StructType\ResultTrackSkybillV2 $return = null;
    /**
     * Constructor method for trackESDResponse
     * @uses TrackESDResponse::setReturn()
     * @param \ChronopostTracking\StructType\ResultTrackSkybillV2 $return
     */
    public function __construct(?\ChronopostTracking\StructType\ResultTrackSkybillV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostTracking\StructType\ResultTrackSkybillV2|null
     */
    public function getReturn(): ?\ChronopostTracking\StructType\ResultTrackSkybillV2
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostTracking\StructType\ResultTrackSkybillV2 $return
     * @return \ChronopostTracking\StructType\TrackESDResponse
     */
    public function setReturn(?\ChronopostTracking\StructType\ResultTrackSkybillV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
