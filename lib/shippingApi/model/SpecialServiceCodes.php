<?php
/**
 * SpecialServiceCodes
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
 * SpecialServiceCodes Class Doc Comment
 *
 * @category Class
 * @description * Ins - Insured Mail.  * RR - Return receipt.  * Sig - Item is trackable if special service is requested. * ADSIG - Adult signature required. * Cert - Certified mail. * DelCon - Delivery confirmation. * ERR - Electronic return receipt. * RRm - Return receipt for merchandise. * Reg - Registered mail. * RegIns - Registered mail with insurance. * SH - Special handling - fragile. * CertRD - Certified mail with restricted delivery. * COD - Collect on delivery. * CODRD - Collect on delivery with restricted delivery. * InsRD - Insurance with restricted delivery. * RegRD - Registered mail with restricted delivery. * RegCOD - Registered mail with COD. * SigRD - Signature required with restricted delivery. * ADSIGRD - Adult signature required with restricted delivery. * RegInsRD - Registered mail with insurance and restricted delivery. * CERTAD - Certified mail with adult signature. * CERTADRD - Certified mail with adult signature and restricted delivery. * hazmat - Hazardous materials. * liveanimal - Live animal surcharge. * liveanimal_poultry - Live Animal-Day Old Poultry Surcharge * holiday - Holiday Delivery- For Priority Mail Express Service Only * sunday - Sunday delivery. * sunday_holiday - Sunday and holiday delivery. * PO_to_Addressee - PO to addressee * noWeekend - Do not deliver on weekend * TenThirty - Delivery by 10:30 AM * PMOD_OPTIONS - PMOD options * NOTIFICATIONS - Notifications.
 * @package  pitneybowesShipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SpecialServiceCodes
{
    /**
     * Possible values of this enum
     */
    const ADSIG = 'ADSIG';
    const ADSIGRD = 'ADSIGRD';
    const CERT = 'Cert';
    const CERTAD = 'CERTAD';
    const CERTADRD = 'CERTADRD';
    const CERT_RD = 'CertRD';
    const COD = 'COD';
    const CODRD = 'CODRD';
    const DEL_CON = 'DelCon';
    const ERR = 'ERR';
    const HAZMAT = 'hazmat';
    const HOLIDAY = 'holiday';
    const INS_RD = 'InsRD';
    const LIVEANIMAL = 'liveanimal';
    const LIVEANIMAL___POULTRY = 'liveanimal - poultry';
    const PMOD_OPTIONS = 'PMOD_OPTIONS';
    const REG = 'Reg';
    const REG_COD = 'RegCOD';
    const REG_INS = 'RegIns';
    const REG_INS_RD = 'RegInsRD';
    const REG_RD = 'RegRD';
    const RR = 'RR';
    const RRM = 'RRM';
    const SH = 'SH';
    const SIG = 'SIG';
    const SIG_RD = 'SigRD';
    const SUNDAY = 'sunday';
    const SUNDAY___HOLIDAY = 'sunday - holiday';
    const NOTIFICATIONS = 'NOTIFICATIONS';
    const PBXPS = 'PBXPS';
    const PBXUS = 'PBXUS';
    const PBXPE = 'PBXPE';
    const ANCILLARY_ENDORSEMENT = 'ANCILLARY_ENDORSEMENT';
    const ADD_HDL = 'ADD_HDL';
    const ALCOHOL = 'ALCOHOL';
    const CARRIER_LEAVE_IF_NO_RES = 'CARRIER_LEAVE_IF_NO_RES';
    const DIRECT_SIG = 'DIRECT_SIG';
    const APPOINTMENT = 'APPOINTMENT';
    const DATE = 'DATE';
    const EVENING = 'EVENING';
    const GCOD = 'GCOD';
    const PAL = 'PAL';
    const PAL_PLUS = 'PAL_PLUS';
    const SAT_DELIVERY = 'SAT_DELIVERY';
    const SAT_PICKUP = 'SAT_PICKUP';
    const HOLD = 'HOLD';
    const NO_SIG = 'NO_SIG';
    const PRL = 'PRL';
    const ADULT_SIG = 'ADULT_SIG';
    const CARBON = 'CARBON';
    const COD_CASHIER = 'COD_CASHIER';
    const COD_CHECK = 'COD_CHECK';
    const DEL_CON = 'DEL_CON';
    const DIRECT = 'DIRECT';
    const DRY_ICE = 'DRY_ICE';
    const INS = 'INS';
    const SHP_RELEASE = 'SHP_RELEASE';
    const VERBAL = 'VERBAL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADSIG,
            self::ADSIGRD,
            self::CERT,
            self::CERTAD,
            self::CERTADRD,
            self::CERT_RD,
            self::COD,
            self::CODRD,
            self::DEL_CON,
            self::ERR,
            self::HAZMAT,
            self::HOLIDAY,
            self::INS_RD,
            self::LIVEANIMAL,
            self::LIVEANIMAL___POULTRY,
            self::PMOD_OPTIONS,
            self::REG,
            self::REG_COD,
            self::REG_INS,
            self::REG_INS_RD,
            self::REG_RD,
            self::RR,
            self::RRM,
            self::SH,
            self::SIG,
            self::SIG_RD,
            self::SUNDAY,
            self::SUNDAY___HOLIDAY,
            self::NOTIFICATIONS,
            self::PBXPS,
            self::PBXUS,
            self::PBXPE,
            self::ANCILLARY_ENDORSEMENT,
            self::ADD_HDL,
            self::ALCOHOL,
            self::CARRIER_LEAVE_IF_NO_RES,
            self::DIRECT_SIG,
            self::APPOINTMENT,
            self::DATE,
            self::EVENING,
            self::GCOD,
            self::PAL,
            self::PAL_PLUS,
            self::SAT_DELIVERY,
            self::SAT_PICKUP,
            self::HOLD,
            self::NO_SIG,
            self::PRL,
            self::ADULT_SIG,
            self::CARBON,
            self::COD_CASHIER,
            self::COD_CHECK,
            self::DEL_CON,
            self::DIRECT,
            self::DRY_ICE,
            self::INS,
            self::SHP_RELEASE,
            self::VERBAL,
        ];
    }
}


