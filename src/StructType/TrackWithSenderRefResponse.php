<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackWithSenderRefResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackWithSenderRefResponse
 * @subpackage Structs
 */
class TrackWithSenderRefResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultTrackWithSenderRef|null
     */
    protected ?\StructType\ResultTrackWithSenderRef $return = null;
    /**
     * Constructor method for trackWithSenderRefResponse
     * @uses TrackWithSenderRefResponse::setReturn()
     * @param \StructType\ResultTrackWithSenderRef $return
     */
    public function __construct(?\StructType\ResultTrackWithSenderRef $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultTrackWithSenderRef|null
     */
    public function getReturn(): ?\StructType\ResultTrackWithSenderRef
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultTrackWithSenderRef $return
     * @return \StructType\TrackWithSenderRefResponse
     */
    public function setReturn(?\StructType\ResultTrackWithSenderRef $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
