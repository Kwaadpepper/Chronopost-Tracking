<?php

declare(strict_types=1);

namespace StructType;

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
     * @var \StructType\ResultTrackSkybill|null
     */
    protected ?\StructType\ResultTrackSkybill $return = null;
    /**
     * Constructor method for trackSkybillResponse
     * @uses TrackSkybillResponse::setReturn()
     * @param \StructType\ResultTrackSkybill $return
     */
    public function __construct(?\StructType\ResultTrackSkybill $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultTrackSkybill|null
     */
    public function getReturn(): ?\StructType\ResultTrackSkybill
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultTrackSkybill $return
     * @return \StructType\TrackSkybillResponse
     */
    public function setReturn(?\StructType\ResultTrackSkybill $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
