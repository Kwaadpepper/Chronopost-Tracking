<?php

declare(strict_types=1);

namespace ChronopostTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSearchResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSearchResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TrackSearchResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTracking\StructType\ResultTrackSearch|null
     */
    protected ?\ChronopostTracking\StructType\ResultTrackSearch $return = null;
    /**
     * Constructor method for trackSearchResponse
     * @uses TrackSearchResponse::setReturn()
     * @param \ChronopostTracking\StructType\ResultTrackSearch $return
     */
    public function __construct(?\ChronopostTracking\StructType\ResultTrackSearch $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostTracking\StructType\ResultTrackSearch|null
     */
    public function getReturn(): ?\ChronopostTracking\StructType\ResultTrackSearch
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostTracking\StructType\ResultTrackSearch $return
     * @return \ChronopostTracking\StructType\TrackSearchResponse
     */
    public function setReturn(?\ChronopostTracking\StructType\ResultTrackSearch $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
