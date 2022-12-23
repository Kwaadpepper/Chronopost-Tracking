# Chronopost Tracking PHP Soap generated Lib

LES SERVICES DE SUIVI DE COLIS (TrackingService)

Chronopost WSDL php generated lib using https://github.com/WsdlToPhp/PackageGenerator

This package will only contain generated content from chronopost endpoint https://ws.chronopost.fr/tracking-cxf/TrackingServiceWS?wsdl

    wsdltophp generate:package \
        --urlorpath="https://ws.chronopost.fr/tracking-cxf/TrackingServiceWS?wsdl" \
        --destination="." \
        --composer-name="kwaadpepper/chronopost-tracking" \
        --force