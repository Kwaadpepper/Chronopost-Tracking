<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPODResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:searchPODResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchPODResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultSearchPOD|null
     */
    protected ?\StructType\ResultSearchPOD $return = null;
    /**
     * Constructor method for searchPODResponse
     * @uses SearchPODResponse::setReturn()
     * @param \StructType\ResultSearchPOD $return
     */
    public function __construct(?\StructType\ResultSearchPOD $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultSearchPOD|null
     */
    public function getReturn(): ?\StructType\ResultSearchPOD
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultSearchPOD $return
     * @return \StructType\SearchPODResponse
     */
    public function setReturn(?\StructType\ResultSearchPOD $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
