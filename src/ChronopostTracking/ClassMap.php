<?php

declare(strict_types=1);

namespace ChronopostTracking;

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
            'cancelListSkybill' => '\\ChronopostTracking\\StructType\\CancelListSkybill',
            'cancelListSkybillResponse' => '\\ChronopostTracking\\StructType\\CancelListSkybillResponse',
            'resultListCancelSkybill' => '\\ChronopostTracking\\StructType\\ResultListCancelSkybill',
            'trackESD' => '\\ChronopostTracking\\StructType\\TrackESD',
            'trackESDResponse' => '\\ChronopostTracking\\StructType\\TrackESDResponse',
            'resultTrackSkybillV2' => '\\ChronopostTracking\\StructType\\ResultTrackSkybillV2',
            'listEventInfoComps' => '\\ChronopostTracking\\StructType\\ListEventInfoComps',
            'eventInfoComp' => '\\ChronopostTracking\\StructType\\EventInfoComp',
            'event' => '\\ChronopostTracking\\StructType\\Event',
            'infoComp' => '\\ChronopostTracking\\StructType\\InfoComp',
            'trackSearch' => '\\ChronopostTracking\\StructType\\TrackSearch',
            'trackSearchResponse' => '\\ChronopostTracking\\StructType\\TrackSearchResponse',
            'resultTrackSearch' => '\\ChronopostTracking\\StructType\\ResultTrackSearch',
            'infosPOD' => '\\ChronopostTracking\\StructType\\InfosPOD',
            'searchPOD' => '\\ChronopostTracking\\StructType\\SearchPOD',
            'searchPODResponse' => '\\ChronopostTracking\\StructType\\SearchPODResponse',
            'resultSearchPOD' => '\\ChronopostTracking\\StructType\\ResultSearchPOD',
            'cancelSkybill' => '\\ChronopostTracking\\StructType\\CancelSkybill',
            'cancelSkybillResponse' => '\\ChronopostTracking\\StructType\\CancelSkybillResponse',
            'resultCancelSkybill' => '\\ChronopostTracking\\StructType\\ResultCancelSkybill',
            'trackWithSenderRef' => '\\ChronopostTracking\\StructType\\TrackWithSenderRef',
            'trackWithSenderRefResponse' => '\\ChronopostTracking\\StructType\\TrackWithSenderRefResponse',
            'resultTrackWithSenderRef' => '\\ChronopostTracking\\StructType\\ResultTrackWithSenderRef',
            'listEvents' => '\\ChronopostTracking\\StructType\\ListEvents',
            'trackSkybillV2' => '\\ChronopostTracking\\StructType\\TrackSkybillV2',
            'trackSkybillV2Response' => '\\ChronopostTracking\\StructType\\TrackSkybillV2Response',
            'trackSkybill' => '\\ChronopostTracking\\StructType\\TrackSkybill',
            'trackSkybillResponse' => '\\ChronopostTracking\\StructType\\TrackSkybillResponse',
            'resultTrackSkybill' => '\\ChronopostTracking\\StructType\\ResultTrackSkybill',
            'searchPODWithSenderRef' => '\\ChronopostTracking\\StructType\\SearchPODWithSenderRef',
            'searchPODWithSenderRefResponse' => '\\ChronopostTracking\\StructType\\SearchPODWithSenderRefResponse',
            'resultSearchPODWithSenderRef' => '\\ChronopostTracking\\StructType\\ResultSearchPODWithSenderRef',
            'parcelPOD' => '\\ChronopostTracking\\StructType\\ParcelPOD',
        ];
    }
}
