<?php

namespace Jasara\AmznSPA\Constants;

class AmazonEnums
{
    public const CONDITIONS = [
        'NewItem',
        'NewWithWarranty',
        'NewOEM',
        'NewOpenBox',
        'UsedLikeNew',
        'UsedVeryGood',
        'UsedGood',
        'UsedAcceptable',
        'UsedPoor',
        'UsedRefurbished',
        'CollectibleLikeNew',
        'CollectibleVeryGood',
        'CollectibleGood',
        'CollectibleAcceptable',
        'CollectiblePoor',
        'RefurbishedWithWarranty',
        'Refurbished',
        'Club',
    ];

    public const NOTIFICATION_TYPES = [
        'ANY_OFFER_CHANGED',
        'FEED_PROCESSING_FINISHED',
        'FBA_OUTBOUND_SHIPMENT_STATUS',
        'FEE_PROMOTION',
        'FULFILLMENT_ORDER_STATUS',
        'REPORT_PROCESSING_FINISHED',
        'BRANDED_ITEM_CONTENT_CHANGE',
        'ITEM_PRODUCT_TYPE_CHANGE',
        'LISTINGS_ITEM_STATUS_CHANGE',
        'LISTINGS_ITEM_ISSUES_CHANGE',
        'MFN_ORDER_STATUS_CHANGE',
        'B2B_ANY_OFFER_CHANGED',
        'ACCOUNT_STATUS_CHANGED',
        'EXTERNAL_FULFILLMENT_SHIPMENT_STATUS_CHANGE',
    ];

    public const FEED_TYPES = [
        // Listing feeds
        'JSON_LISTINGS_FEED',
        'POST_PRODUCT_DATA',
        'POST_INVENTORY_AVAILABILITY_DATA',
        'POST_PRODUCT_OVERRIDES_DATA',
        'POST_PRODUCT_PRICING_DATA',
        'POST_PRODUCT_IMAGE_DATA',
        'POST_PRODUCT_RELATIONSHIP_DATA',
        'POST_FLAT_FILE_INVLOADER_DATA',
        'POST_FLAT_FILE_LISTINGS_DATA',
        'POST_FLAT_FILE_BOOKLOADER_DATA',
        'POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA',
        'POST_FLAT_FILE_LISTINGS_DATA',
        'POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA',
        'POST_UIEE_BOOKLOADER_DATA',
        'POST_STD_ACES_DATA',
        // Order feeds
        'POST_ORDER_ACKNOWLEDGEMENT_DATA',
        'POST_PAYMENT_ADJUSTMENT_DATA',
        'POST_ORDER_FULFILLMENT_DATA',
        'POST_INVOICE_CONFIRMATION_DATA',
        'POST_EXPECTED_SHIP_DATE_SOD',
        'POST_FLAT_FILE_ORDER_ACKNOWLEDGEMENT_DATA',
        'POST_FLAT_FILE_PAYMENT_ADJUSTMENT_DATA',
        'POST_FLAT_FILE_FULFILLMENT_DATA',
        'POST_EXPECTED_SHIP_DATE_SOD_FLAT_FILE',
        // Fulfillment by Amazon feeds
        'POST_FULFILLMENT_ORDER_REQUEST_DATA',
        'POST_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA',
        'POST_FBA_INBOUND_CARTON_CONTENTS',
        'POST_FLAT_FILE_FULFILLMENT_ORDER_REQUEST_DATA',
        'POST_FLAT_FILE_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA',
        'POST_FLAT_FILE_FBA_CREATE_INBOUND_PLAN',
        'POST_FLAT_FILE_FBA_UPDATE_INBOUND_PLAN',
        'POST_FLAT_FILE_FBA_CREATE_REMOVAL',
        // Business feeds
        'RFQ_UPLOAD_FEED',
        // Easy Ship feeds
        'POST_EASYSHIP_DOCUMENTS',
    ];

    public const REPORT_TYPES = [
        // Vendor retail analytics reports
        'GET_VENDOR_SALES_DIAGNOSTIC_REPORT',
        'GET_VENDOR_INVENTORY_HEALTH_AND_PLANNING_REPORT',
        'GET_VENDOR_DEMAND_FORECAST_REPORT',
        // Inventory reports
        'GET_FLAT_FILE_OPEN_LISTINGS_DATA',
        'GET_MERCHANT_LISTINGS_ALL_DATA',
        'GET_MERCHANT_LISTINGS_DATA',
        'GET_MERCHANT_LISTINGS_INACTIVE_DATA',
        'GET_MERCHANT_LISTINGS_DATA_BACK_COMPAT',
        'GET_MERCHANT_LISTINGS_DATA_LITE',
        'GET_MERCHANT_LISTINGS_DATA_LITER',
        'GET_MERCHANT_CANCELLED_LISTINGS_DATA',
        'GET_MERCHANT_LISTINGS_DEFECT_DATA',
        'GET_PAN_EU_OFFER_STATUS',
        'GET_MFN_PAN_EU_OFFER_STATUS',
        'GET_REFERRAL_FEE_PREVIEW_REPORT',
        // Order reports
        'GET_FLAT_FILE_ACTIONABLE_ORDER_DATA_SHIPPING',
        'GET_ORDER_REPORT_DATA_INVOICING',
        'GET_ORDER_REPORT_DATA_TAX',
        'GET_ORDER_REPORT_DATA_SHIPPING',
        'GET_FLAT_FILE_ORDER_REPORT_DATA_INVOICING',
        'GET_FLAT_FILE_ORDER_REPORT_DATA_SHIPPING',
        'GET_FLAT_FILE_ORDER_REPORT_DATA_TAX',
        // Order tracking reports
        'GET_FLAT_FILE_ALL_ORDERS_DATA_BY_LAST_UPDATE_GENERAL',
        'GET_FLAT_FILE_ALL_ORDERS_DATA_BY_ORDER_DATE_GENERAL',
        'GET_FLAT_FILE_ARCHIVED_ORDERS_DATA_BY_ORDER_DATE',
        'GET_XML_ALL_ORDERS_DATA_BY_LAST_UPDATE_GENERAL',
        'GET_XML_ALL_ORDERS_DATA_BY_ORDER_DATE_GENERAL',
        // Pending order reports
        'GET_FLAT_FILE_PENDING_ORDERS_DATA',
        'GET_PENDING_ORDERS_DATA',
        'GET_CONVERGED_FLAT_FILE_PENDING_ORDERS_DATA',
        // Returns reports
        'GET_XML_RETURNS_DATA_BY_RETURN_DATE',
        'GET_FLAT_FILE_RETURNS_DATA_BY_RETURN_DATE',
        'GET_XML_MFN_PRIME_RETURNS_REPORT',
        'GET_CSV_MFN_PRIME_RETURNS_REPORT',
        'GET_XML_MFN_SKU_RETURN_ATTRIBUTES_REPORT',
        'GET_FLAT_FILE_MFN_SKU_RETURN_ATTRIBUTES_REPORT',
        // Performance reports
        'GET_SELLER_FEEDBACK_DATA',
        'GET_V1_SELLER_PERFORMANCE_REPORT',
        'GET_V2_SELLER_PERFORMANCE_REPORT',
        // Settlement reports
        'GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE',
        'GET_V2_SETTLEMENT_REPORT_DATA_XML',
        'GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE_V2',
        // FBA reports
        // FBA Sales reports
        'GET_AMAZON_FULFILLED_SHIPMENTS_DATA_GENERAL',
        'GET_AMAZON_FULFILLED_SHIPMENTS_DATA_INVOICING',
        'GET_AMAZON_FULFILLED_SHIPMENTS_DATA_TAX',
        'GET_FLAT_FILE_ALL_ORDERS_DATA_BY_LAST_UPDATE_GENERAL',
        'GET_FLAT_FILE_ALL_ORDERS_DATA_BY_ORDER_DATE_GENERAL',
        'GET_XML_ALL_ORDERS_DATA_BY_LAST_UPDATE_GENERAL',
        'GET_XML_ALL_ORDERS_DATA_BY_ORDER_DATE_GENERAL',
        'GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_SALES_DATA',
        'GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_PROMOTION_DATA',
        'GET_FBA_FULFILLMENT_CUSTOMER_TAXES_DATA',
        'GET_REMOTE_FULFILLMENT_ELIGIBILITY',
        // FBA Inventory reports
        'GET_AFN_INVENTORY_DATA',
        'GET_AFN_INVENTORY_DATA_BY_COUNTRY',
        'GET_LEDGER_SUMMARY_VIEW_DATA',
        'GET_LEDGER_DETAIL_VIEW_DATA',
        'GET_FBA_FULFILLMENT_CURRENT_INVENTORY_DATA',
        'GET_FBA_FULFILLMENT_MONTHLY_INVENTORY_DATA',
        'GET_FBA_FULFILLMENT_INVENTORY_RECEIPTS_DATA',
        'GET_RESERVED_INVENTORY_DATA',
        'GET_FBA_FULFILLMENT_INVENTORY_SUMMARY_DATA',
        'GET_FBA_FULFILLMENT_INVENTORY_ADJUSTMENTS_DATA',
        'GET_FBA_FULFILLMENT_INVENTORY_HEALTH_DATA',
        'GET_FBA_MYI_UNSUPPRESSED_INVENTORY_DATA',
        'GET_FBA_MYI_ALL_INVENTORY_DATA',
        'GET_RESTOCK_INVENTORY_RECOMMENDATIONS_REPORT',
        'GET_FBA_FULFILLMENT_INBOUND_NONCOMPLIANCE_DATA',
        'GET_STRANDED_INVENTORY_UI_DATA',
        'GET_STRANDED_INVENTORY_LOADER_DATA',
        'GET_FBA_INVENTORY_AGED_DATA',
        'GET_EXCESS_INVENTORY_DATA',
        'GET_FBA_STORAGE_FEE_CHARGES_DATA',
        'GET_PRODUCT_EXCHANGE_DATA',
        // FBA Payments reports
        'GET_FBA_ESTIMATED_FBA_FEES_TXT_DATA',
        'GET_FBA_REIMBURSEMENTS_DATA',
        'GET_FBA_FULFILLMENT_LONGTERM_STORAGE_FEE_CHARGES_DATA',
        // FBA Customer Concessions reports
        'GET_FBA_FULFILLMENT_CUSTOMER_RETURNS_DATA',
        'GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_REPLACEMENT_DATA',
        // FBA Removals report
        'GET_FBA_RECOMMENDED_REMOVAL_DATA',
        'GET_FBA_FULFILLMENT_REMOVAL_ORDER_DETAIL_DATA',
        'GET_FBA_FULFILLMENT_REMOVAL_SHIPMENT_DETAIL_DATA',
        // FBA Small and Light reports
        'GET_FBA_UNO_INVENTORY_DATA',
        // Tax reports
        'GET_FLAT_FILE_SALES_TAX_DATA',
        'SC_VAT_TAX_REPORT',
        'GET_VAT_TRANSACTION_DATA',
        'GET_GST_MTR_B2B_CUSTOM',
        'GET_GST_MTR_B2C_CUSTOM',
        // Browse tree report
        'GET_XML_BROWSE_TREE_DATA',
        // Easy ship reports
        'GET_EASYSHIP_DOCUMENTS',
        'GET_EASYSHIP_PICKEDUP',
        'GET_EASYSHIP_WAITING_FOR_PICKUP',
        // Amazon business reports
        'RFQD_BULK_DOWNLOAD',
        'FEE_DISCOUNTS_REPORT',
        // Amazon pay reports
        'GET_FLAT_FILE_OFFAMAZONPAYMENTS_SANDBOX_SETTLEMENT_DATA',
        // B2B Product opportunities reports
        'GET_B2B_PRODUCT_OPPORTUNITIES_RECOMMENDED_FOR_YOU',
        'GET_B2B_PRODUCT_OPPORTUNITIES_NOT_YET_ON_AMAZON',
    ];

    public const REPORT_PERIODS = [
        'PT5M',
        'PT15M',
        'PT30M',
        'PT1H',
        'PT2H',
        'PT4H',
        'PT8H',
        'PT12H',
        'P1D',
        'P2D',
        'P3D',
        'PT84H',
        'P7D',
        'P14D',
        'P15D',
        'P18D',
        'P30D',
        'P1M',
    ];

    public const PREP_INSTRUCTIONS = [
        'Polybagging',
        'BubbleWrapping',
        'Taping',
        'BlackShrinkWrapping',
        'Labeling',
        'HangGarment',
        'Boxing',
        'SetCreation',
        'SetStickering',
        'SuffocationStickering',
        'RemoveFromHanger',
    ];

    public const SHIPMENT_STATUSES = [
        'WORKING',
        'SHIPPED',
        'RECEIVING',
        'CANCELLED',
        'DELETED',
        'CLOSED',
        'ERROR',
        'IN_TRANSIT',
        'DELIVERED',
        'CHECKED_IN',
        'READY_TO_SHIP',
    ];

    public const PACKAGE_STATUSES = [
        'SHIPPED',
        'IN_TRANSIT',
        'DELIVERED',
        'CHECKED_IN',
        'RECEIVING',
        'CLOSED',
        'DELETED',
    ];

    public const SELLER_FREIGHT_CLASSES = [
        '50',
        '55',
        '60',
        '65',
        '70',
        '77.5',
        '85',
        '92.5',
        '100',
        '110',
        '125',
        '150',
        '175',
        '200',
        '250',
        '300',
        '400',
        '500',
    ];

    public const TRANSPORT_STATUSES = [
        'WORKING',
        'ESTIMATING',
        'ESTIMATED',
        'ERROR_ON_ESTIMATING',
        'CONFIRMING',
        'CONFIRMED',
        'ERROR_ON_CONFIRMING',
        'VOIDING',
        'VOIDED',
        'ERROR_IN_VOIDING',
        'ERROR',
    ];

    public const PAGE_TYPES = [
        'PackageLabel_Letter_2',
        'PackageLabel_Letter_4',
        'PackageLabel_Letter_6',
        'PackageLabel_Letter_6_CarrierLeft',
        'PackageLabel_A4_2',
        'PackageLabel_A4_4',
        'PackageLabel_Plain_Paper',
        'PackageLabel_Plain_Paper_CarrierBottom',
        'PackageLabel_Thermal',
        'PackageLabel_Thermal_Unified',
        'PackageLabel_Thermal_NonPCP',
        'PackageLabel_Thermal_No_Carrier_Rotation',
    ];

    public const BOX_CONTENTS_SOURCES = [
        'NONE',
        'FEED',
        '2D_BARCODE',
        'INTERACTIVE',
    ];

    public const PROCESSING_STATUSES = [
        'CANCELLED',
        'DONE',
        'FATAL',
        'IN_PROGRESS',
        'IN_QUEUE',
    ];

    public const INCLUDED_DATA_ITEMS = [
        'attributes',
        'identifiers',
        'images',
        'productTypes',
        'salesRanks',
        'summaries',
        'variations',
        'vendorDetails',
    ];

    public const REPLENISHMENT_CATEGORIES = [
        'ALLOCATED',
        'BASIC_REPLENISHMENT',
        'IN_SEASON',
        'LIMITED_REPLENISHMENT',
        'MANUFACTURER_OUT_OF_STOCK',
        'NEW_PRODUCT',
        'NON_REPLENISHABLE',
        'NON_STOCKUPABLE',
        'OBSOLETE',
        'PLANNED_REPLENISHMENT',
    ];

    public const INBOUND_CARRIER_NAMES = [
        'USPS',
        'DHL_EXPRESS_USA_INC',
        'FEDERAL_EXPRESS_CORP',
        'UNITED_STATES_POSTAL_SERVICE',
        'UNITED_PARCEL_SERVICE_INC',
        'OTHER',
        'BUSINESS_POST',
        'DHL_AIRWAYS_INC',
        'DHL_UK',
        'PARCELFORCE',
        'DPD',
        'TNT_LOGISTICS_CORPORATION',
        'TNT',
        'YODEL',
    ];

    public const MF_CARRIER_CODES = [
        'USPS',
        'UPS',
        'UPSMI',
        'FedEx',
        'DHL',
        'Fastway',
        'GLS',
        'GO!',
        'Hermes Logistik Gruppe',
        'Royal Mail',
        'Parcelforce',
        'City Link',
        'TNT',
        'Target',
        'SagawaExpress',
        'NipponExpress',
        'YamatoTransport',
        'DHL Global Mail',
        'UPS Mail Innovations',
        'FedEx SmartPost',
        'OSM',
        'OnTrac',
        'Streamlite',
        'Newgistics',
        'Canada Post',
        'Blue Package',
        'Chronopost',
        'Deutsche Post',
        'DPD',
        'La Poste',
        'Parcelnet',
        'Poste Italiane',
        'SDA',
        'Smartmail',
        'FEDEX_JP',
        'JP_EXPRESS',
        'NITTSU',
        'SAGAWA',
        'YAMATO',
        'BlueDart',
        'AFL/Fedex',
        'Aramex',
        'India Post',
        'Professional',
        'DTDC',
        'Overnite Express',
        'First Flight',
        'Delhivery',
        'Lasership',
        'Yodel',
        'Other',
        'Amazon Shipping',
        'Seur',
        'Correos',
        'MRW',
        'Endopack',
        'Chrono Express',
        'Nacex',
        'Otro',
        'Correios',
        'Toll Global Express',
        'China Post',
        'AUSSIE_POST',
        'EUB',
        'Australia Post',
        'Yun Express',
        'Fastway',
        '4PX',
        'YANWEN',
        'SF Express',
        'BRT',
        'AustraliaPost-Consignment',
        'AustraliaPost-ArticleId',
        'Sendle',
        'CouriersPlease',
        'A-1',
        'AAA Cooper',
        'ABF',
        'ALLJOY',
        'Aras Kargo',
        'Arkas',
        'Arrow XL',
        'Asendia',
        'Asgard',
        'Assett',
        'AT POST',
        'ATS',
        'Balnak',
        'Beijing Quanfeng Express',
        'Best Buy',
        'Best Express',
        'BJS',
        'Bombax',
        'Cart2India',
        'CDC',
        'CELERITAS',
        'CEVA',
        'Ceva Lojistik',
        'Cititrans',
        'Coliposte',
        'Colissimo',
        'Conway',
        'Correos Express',
        'Couriers Please',
        'CTTExpress',
        'DB Schenker',
        'DHL eCommerce',
        'DHL Express',
        'DHL Freight',
        'DHL Home Delivery',
        'DHL Kargo',
        'DHL-Paket',
        'DHLPL',
        'Digital Delivery',
        'DirectLog',
        'Dotzot',
        'DSV',
        'DX Freight',
        'ECMS',
        'Ecom Express',
        'Emirates Post',
        'Energo',
        'Envialia',
        'Estafeta',
        'Estes',
        'Fedex Freight',
        'Fillo Kargo',
        'First Flight China',
        'First Mile',
        'Gati',
        'GEL Express',
        'geodis',
        'Geodis Calberson',
        'Geopost Kargo',
        'Hermes Einrichtungsservice',
        'Home Logistics',
        'Hongkong Post',
        'Horoz Lojistik',
        'HS code',
        'Hunter Logistics',
        'ICC Worldwide',
        'IDS Netzwerk',
        'InPost',
        'iParcel',
        'Japan Post',
        'JCEX',
        'Kargokar',
        'Kuehne+Nagel',
        'Landmark',
        'Metro Kargo',
        'MNG Kargo',
        'Narpost Kargo',
        'Nexive',
        'Ninjavan',
        'Old Dominion',
        'OneWorldExpress',
        'Panther',
        'Pilot',
        'Pilot Freight',
        'Polish Post',
        'Post NL',
        'PostNord',
        'PTT Kargo',
        'PUROLATOR',
        'QExpress',
        'Qxpress',
        'R+L',
        'Raben Group',
        'Rhenus',
        'Rieck',
        'Rivigo',
        'Roadrunner',
        'Safexpress',
        'Saia',
        'Seino',
        'SEINO TRANSPORTATION',
        'Selem Kargo',
        'Self Delivery',
        'SENDLE',
        'SFC',
        'Ship Delight',
        'Ship Global US',
        'ShipEconomy',
        'ShipGlobal',
        'Shree Maruti Courier',
        'Shree Tirupati Courier',
        'Shunfeng Express',
        'Singapore Post',
        'South Eastern Freight Lines',
        'Speedex',
        'Spoton',
        'StarTrack-ArticleID',
        'StarTrack-Consignment',
        'STO Express',
        'Tezel Lojistik',
        'The Professional Couriers',
        'TIPSA',
        'TNT Kargo',
        'TNTIT',
        'Total Express',
        'Trackon',
        'TransFolha',
        'Tuffnells',
        'UPS Freight',
        'Urban Express',
        'VIR',
        'VNLIN',
        'WanbExpress',
        'Watkins and Shepard',
        'Whizzard',
        'WINIT',
        'XDP',
        'XPO Freight',
        'Xpressbees',
        'YDH',
        'Yellow Freight',
        'YTO Express',
        'Yunda Express',
        'ZTO Express',
        'Tourline',
    ];

    public const ITEM_CONDITION = [
        'NEW',
        'USED',
        'COLLECTIBLE',
        'REFURISHED',
        'CLUB',
        'New',
        'Used',
        'Collectible',
        'Refurbished',
        'Club',
    ];

    public const DELIVERY_EXPERIENCE_OPTION = [
        'DeliveryConfirmationWithAdultSignature',
        'DeliveryConfirmationWithSignature',
        'DeliveryConfirmationWithoutSignature',
        'NoTracking',
        'NoPreference',
    ];

    public const PREDEFINED_PACKAGE_DIMENSIONS = [
        'FedEx_Box_10kg',
        'FedEx_Box_25kg',
        'FedEx_Box_Extra_Large_1',
        'FedEx_Box_Extra_Large_2',
        'FedEx_Box_Large_1',
        'FedEx_Box_Large_2',
        'FedEx_Box_Medium_1',
        'FedEx_Box_Medium_2',
        'FedEx_Box_Small_1',
        'FedEx_Box_Small_2',
        'FedEx_Envelope',
        'FedEx_Padded_Pak',
        'FedEx_Pak_1',
        'FedEx_Pak_2',
        'FedEx_Tube',
        'FedEx_XL_Pak',
        'UPS_Box_10kg',
        'UPS_Box_25kg',
        'UPS_Express_Box',
        'UPS_Express_Box_Large',
        'UPS_Express_Box_Medium',
        'UPS_Express_Box_Small',
        'UPS_Express_Envelope',
        'UPS_Express_Hard_Pak',
        'UPS_Express_Legal_Envelope',
        'UPS_Express_Pak',
        'UPS_Express_Tube',
        'UPS_Laboratory_Pak',
        'UPS_Pad_Pak',
        'UPS_Pallet',
        'USPS_Card',
        'USPS_Flat',
        'USPS_FlatRateCardboardEnvelope',
        'USPS_FlatRateEnvelope',
        'USPS_FlatRateGiftCardEnvelope',
        'USPS_FlatRateLegalEnvelope',
        'USPS_FlatRatePaddedEnvelope',
        'USPS_FlatRateWindowEnvelope',
        'USPS_LargeFlatRateBoardGameBox',
        'USPS_LargeFlatRateBox',
        'USPS_Letter',
        'USPS_MediumFlatRateBox1',
        'USPS_MediumFlatRateBox2',
        'USPS_RegionalRateBoxA1',
        'USPS_RegionalRateBoxA2',
        'USPS_RegionalRateBoxB1',
        'USPS_RegionalRateBoxB2',
        'USPS_RegionalRateBoxC',
        'USPS_SmallFlatRateBox',
        'USPS_SmallFlatRateEnvelope',
    ];

    public const DELIVERY_EXPERIENCE_TYPE = [
        'DeliveryConfirmationWithAdultSignature',
        'DeliveryConfirmationWithSignature',
        'DeliveryConfirmationWithoutSignature',
        'NoTracking',
    ];

    public const LABEL_FORMAT = [
        'PDF',
        'PNG',
        'ZPL203',
        'ZPL300',
        'ShippingServiceDefault',
    ];

    public const NAME = [
        'FBAPerUnitFulfillmentFee',
        'FBAPerOrderFulfillmentFee',
        'FBATransportationFee',
        'FBAFulfillmentCODFee',
    ];

    public const FULFILLMENT_ORDER_STATUS = [
        'NEW',
        'RECEIVED',
        'PLANNING',
        'PROCESSING',
        'CANCELLED',
        'COMPLETE',
        'COMPLETEPARTIALLED',
        'UNFULFILLABLE',
        'INVALID',
    ];

    public const CURRENT_STATUS = [
        'IN_TRANSIT',
        'DELIVERED',
        'RETURNING',
        'RETURNED',
        'UNDELIVERABLE',
        'DELAYED',
        'AVAILABLE_FOR_PICKUP',
        'CUSTOMER_ACTION',
    ];

    public const ADDITIONAL_LOCATION_INFO = [
        'AS_INSTRUCTED',
        'CARPORT',
        'CUSTOMER_PICKUP',
        'DECK',
        'DOOR_PERSON',
        'FRONT_DESK',
        'FRONT_DOOR',
        'GARAGE',
        'GUARD',
        'MAIL_ROOM',
        'MAIL_SLOT',
        'MAILBOX',
        'MC_BOY',
        'MC_GIRL',
        'MC_MAN',
        'MC_WOMAN',
        'NEIGHBOR',
        'OFFICE',
        'OUTBUILDING',
        'PATIO',
        'PORCH',
        'REAR_DOOR',
        'RECEPTIONIST',
        'RECEIVER',
        'SECURE_LOCATION',
        'SIDE_DOOR',
    ];

    public const RETURN_ITEM_DISPOSITION = [
        'Sellable',
        'Defective',
        'CustomerDamaged',
        'CarrierDamaged',
        'FulfillerDamaged',
    ];

    public const IN_ELIGIBILITY_REASON_LIST = [
        'FBA_INB_0004',
        'FBA_INB_0006',
        'FBA_INB_0007',
        'FBA_INB_0008',
        'FBA_INB_0009',
        'FBA_INB_0010',
        'FBA_INB_0011',
        'FBA_INB_0012',
        'FBA_INB_0013',
        'FBA_INB_0014',
        'FBA_INB_0015',
        'FBA_INB_0016',
        'FBA_INB_0017',
        'FBA_INB_0018',
        'FBA_INB_0019',
        'FBA_INB_0034',
        'FBA_INB_0035',
        'FBA_INB_0036',
        'FBA_INB_0037',
        'FBA_INB_0038',
        'FBA_INB_0050',
        'FBA_INB_0051',
        'FBA_INB_0053',
        'FBA_INB_0055',
        'FBA_INB_0056',
        'FBA_INB_0059',
        'FBA_INB_0065',
        'FBA_INB_0066',
        'FBA_INB_0067',
        'FBA_INB_0068',
        'FBA_INB_0095',
        'FBA_INB_0097',
        'FBA_INB_0098',
        'FBA_INB_0099',
        'FBA_INB_0100',
        'FBA_INB_0103',
        'FBA_INB_0104',
        'UNKNOWN_INB_ERROR_CODE',
    ];

    public const ORDER_STATUS = [
        'Pending',
        'Unshipped',
        'PartiallyShipped',
        'Shipped',
        'Canceled',
        'Unfulfillable',
        'InvoiceUnconfirmed',
        'PendingAvailability',
    ];

    public const ORDER_TYPE = [
        'StandardOrder',
        'LongLeadTimeOrder',
        'Preorder',
        'BackOrder',
        'SourcingOnDemandOrder',
    ];
}
