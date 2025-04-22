<?php

declare(strict_types=1);

namespace ChronopostTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSkybillV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSkybillV2Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TrackSkybillV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTracking\StructType\ResultTrackSkybillV2|null
     */
    protected ?\ChronopostTracking\StructType\ResultTrackSkybillV2 $return = null;
    /**
     * Constructor method for trackSkybillV2Response
     * @uses TrackSkybillV2Response::setReturn()
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
     * @return \ChronopostTracking\StructType\TrackSkybillV2Response
     */
    public function setReturn(?\ChronopostTracking\StructType\ResultTrackSkybillV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
