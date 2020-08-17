<?php
/**
 * Services
 *
 * PHP version 5
 *
 * @category Class
 * @package  pitneybowesShipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shipping API
 *
 * Shipping API Sample.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@pb.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace pitneybowesShipping\shippingApi.model;
use \pitneybowesShipping\ObjectSerializer;

/**
 * Services Class Doc Comment
 *
 * @category Class
 * @description The abbreviated name of the carrier-specific service. For abbreviations, see the Services table on the [carrier&#39;s reference page](https://shipping.pitneybowes.com/reference/carrier-services.html).   EM - Priority Mail Express | PM - Priority Mail | FCM - First-Class Mail | PRCLSEL - Parcel Select | STDPOST - Standard Post | LIB - Library Mail | MEDIA - Media Mail | PMOD - Priority Mail Open and Distribute | EMI - Priority Mail Express International | PMI - Priority Mail International | FCMI - First-Class Mail International | FCPIS - First-Class Package International Service. For overseas tracking,  [Do the APIs support E-USPS DELCON?](https://shipping.pitneybowes.com/faqs/shipments.html#usps-e-delcon-faq)
 * @package  pitneybowesShipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Services
{
    /**
     * Possible values of this enum
     */
    const EM = 'EM';
    const PM = 'PM';
    const FCM = 'FCM';
    const PRCLSEL = 'PRCLSEL';
    const STDPOST = 'STDPOST';
    const LIB = 'LIB';
    const MEDIA = 'MEDIA';
    const PMOD = 'PMOD';
    const EMI = 'EMI';
    const PMI = 'PMI';
    const FCMI = 'FCMI';
    const FCPIS = 'FCPIS';
    const BPM = 'BPM';
    const PSLW = 'PSLW';
    const STANDARD = 'STANDARD';
    const PBXPS = 'PBXPS';
    const PBXUS = 'PBXUS';
    const PBXPE = 'PBXPE';
    const NDA_AM = 'NDA_AM';
    const NDA = 'NDA';
    const NDA_SVR = 'NDA_SVR';
    const _2_DA_AM = '2DA_AM';
    const _2_DA = '2DA';
    const _3_DA = '3DA';
    const GRD = 'GRD';
    const HOM = 'HOM';
    const NDA_AM_FREIGHT = 'NDA_AM_FREIGHT';
    const NDA_FREIGHT = 'NDA_FREIGHT';
    const _2_DA_FREIGHT = '2DA_FREIGHT';
    const _3_DA_FREIGHT = '3DA_FREIGHT';
    const SP_PRE_STD = 'SP_PRE_STD';
    const SP_PRCLSEL = 'SP_PRCLSEL';
    const SP_MEDIA = 'SP_MEDIA';
    const SP_PRE_PRINT = 'SP_PRE_PRINT';
    const XPP = 'XPP';
    const EXP = 'EXP';
    const XPD = 'XPD';
    const STD = 'STD';
    const EXS = 'EXS';
    const EXP_FREIGHT = 'EXP_FREIGHT';
    const XPD_FREIGHT = 'XPD_FREIGHT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EM,
            self::PM,
            self::FCM,
            self::PRCLSEL,
            self::STDPOST,
            self::LIB,
            self::MEDIA,
            self::PMOD,
            self::EMI,
            self::PMI,
            self::FCMI,
            self::FCPIS,
            self::BPM,
            self::PSLW,
            self::STANDARD,
            self::PBXPS,
            self::PBXUS,
            self::PBXPE,
            self::NDA_AM,
            self::NDA,
            self::NDA_SVR,
            self::_2_DA_AM,
            self::_2_DA,
            self::_3_DA,
            self::GRD,
            self::HOM,
            self::NDA_AM_FREIGHT,
            self::NDA_FREIGHT,
            self::_2_DA_FREIGHT,
            self::_3_DA_FREIGHT,
            self::SP_PRE_STD,
            self::SP_PRCLSEL,
            self::SP_MEDIA,
            self::SP_PRE_PRINT,
            self::XPP,
            self::EXP,
            self::XPD,
            self::STD,
            self::EXS,
            self::EXP_FREIGHT,
            self::XPD_FREIGHT,
        ];
    }
}


