<?php

declare(strict_types=1);
/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'cancelListSkybill' => '\\StructType\\CancelListSkybill',
            'cancelListSkybillResponse' => '\\StructType\\CancelListSkybillResponse',
            'resultListCancelSkybill' => '\\StructType\\ResultListCancelSkybill',
            'trackESD' => '\\StructType\\TrackESD',
            'trackESDResponse' => '\\StructType\\TrackESDResponse',
            'resultTrackSkybillV2' => '\\StructType\\ResultTrackSkybillV2',
            'listEventInfoComps' => '\\StructType\\ListEventInfoComps',
            'eventInfoComp' => '\\StructType\\EventInfoComp',
            'event' => '\\StructType\\Event',
            'infoComp' => '\\StructType\\InfoComp',
            'trackSearch' => '\\StructType\\TrackSearch',
            'trackSearchResponse' => '\\StructType\\TrackSearchResponse',
            'resultTrackSearch' => '\\StructType\\ResultTrackSearch',
            'infosPOD' => '\\StructType\\InfosPOD',
            'searchPOD' => '\\StructType\\SearchPOD',
            'searchPODResponse' => '\\StructType\\SearchPODResponse',
            'resultSearchPOD' => '\\StructType\\ResultSearchPOD',
            'cancelSkybill' => '\\StructType\\CancelSkybill',
            'cancelSkybillResponse' => '\\StructType\\CancelSkybillResponse',
            'resultCancelSkybill' => '\\StructType\\ResultCancelSkybill',
            'trackWithSenderRef' => '\\StructType\\TrackWithSenderRef',
            'trackWithSenderRefResponse' => '\\StructType\\TrackWithSenderRefResponse',
            'resultTrackWithSenderRef' => '\\StructType\\ResultTrackWithSenderRef',
            'listEvents' => '\\StructType\\ListEvents',
            'trackSkybillV2' => '\\StructType\\TrackSkybillV2',
            'trackSkybillV2Response' => '\\StructType\\TrackSkybillV2Response',
            'trackSkybill' => '\\StructType\\TrackSkybill',
            'trackSkybillResponse' => '\\StructType\\TrackSkybillResponse',
            'resultTrackSkybill' => '\\StructType\\ResultTrackSkybill',
            'searchPODWithSenderRef' => '\\StructType\\SearchPODWithSenderRef',
            'searchPODWithSenderRefResponse' => '\\StructType\\SearchPODWithSenderRefResponse',
            'resultSearchPODWithSenderRef' => '\\StructType\\ResultSearchPODWithSenderRef',
            'parcelPOD' => '\\StructType\\ParcelPOD',
        ];
    }
}
