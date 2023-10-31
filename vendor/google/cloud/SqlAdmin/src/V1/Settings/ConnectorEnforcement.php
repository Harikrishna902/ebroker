<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1\Settings;

use UnexpectedValueException;

/**
 * The options for enforcing Cloud SQL connectors in the instance.
 *
 * Protobuf type <code>google.cloud.sql.v1.Settings.ConnectorEnforcement</code>
 */
class ConnectorEnforcement
{
    /**
     * The requirement for Cloud SQL connectors is unknown.
     *
     * Generated from protobuf enum <code>CONNECTOR_ENFORCEMENT_UNSPECIFIED = 0;</code>
     */
    const CONNECTOR_ENFORCEMENT_UNSPECIFIED = 0;
    /**
     * Do not require Cloud SQL connectors.
     *
     * Generated from protobuf enum <code>NOT_REQUIRED = 1;</code>
     */
    const NOT_REQUIRED = 1;
    /**
     * Require all connections to use Cloud SQL connectors, including the
     * Cloud SQL Auth Proxy and Cloud SQL Java, Python, and Go connectors.
     * Note: This disables all existing authorized networks.
     *
     * Generated from protobuf enum <code>REQUIRED = 2;</code>
     */
    const REQUIRED = 2;

    private static $valueToName = [
        self::CONNECTOR_ENFORCEMENT_UNSPECIFIED => 'CONNECTOR_ENFORCEMENT_UNSPECIFIED',
        self::NOT_REQUIRED => 'NOT_REQUIRED',
        self::REQUIRED => 'REQUIRED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


