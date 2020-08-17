<?php
/**
 * Carrier
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
 * Carrier Class Doc Comment
 *
 * @category Class
 * @description USPS - US Postal Service | PBPRESORT - Pitney Powes Presort Services |   NEWGISTICS - Newgistics.
 * @package  pitneybowesShipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Carrier
{
    /**
     * Possible values of this enum
     */
    const USPS = 'USPS';
    const PBPRESORT = 'PBPRESORT';
    const NEWGISTICS = 'NEWGISTICS';
    const PBI = 'PBI';
    const FEDEX = 'FEDEX';
    const USP = 'USP';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USPS,
            self::PBPRESORT,
            self::NEWGISTICS,
            self::PBI,
            self::FEDEX,
            self::USP,
        ];
    }
}


