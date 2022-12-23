<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSearchResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSearchResponse
 * @subpackage Structs
 */
class TrackSearchResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultTrackSearch|null
     */
    protected ?\StructType\ResultTrackSearch $return = null;
    /**
     * Constructor method for trackSearchResponse
     * @uses TrackSearchResponse::setReturn()
     * @param \StructType\ResultTrackSearch $return
     */
    public function __construct(?\StructType\ResultTrackSearch $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultTrackSearch|null
     */
    public function getReturn(): ?\StructType\ResultTrackSearch
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultTrackSearch $return
     * @return \StructType\TrackSearchResponse
     */
    public function setReturn(?\StructType\ResultTrackSearch $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
