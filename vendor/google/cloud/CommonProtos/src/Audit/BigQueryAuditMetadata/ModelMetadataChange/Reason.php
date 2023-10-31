<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata\ModelMetadataChange;

use UnexpectedValueException;

/**
 * Describes how the model metadata was changed.
 *
 * Protobuf type <code>google.cloud.audit.BigQueryAuditMetadata.ModelMetadataChange.Reason</code>
 */
class Reason
{
    /**
     * Unknown.
     *
     * Generated from protobuf enum <code>REASON_UNSPECIFIED = 0;</code>
     */
    const REASON_UNSPECIFIED = 0;
    /**
     * Model metadata was updated using the models.patch API.
     *
     * Generated from protobuf enum <code>MODEL_PATCH_REQUEST = 1;</code>
     */
    const MODEL_PATCH_REQUEST = 1;
    /**
     * Model metadata was updated using a DDL query.
     *
     * Generated from protobuf enum <code>QUERY = 2;</code>
     */
    const QUERY = 2;

    private static $valueToName = [
        self::REASON_UNSPECIFIED => 'REASON_UNSPECIFIED',
        self::MODEL_PATCH_REQUEST => 'MODEL_PATCH_REQUEST',
        self::QUERY => 'QUERY',
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


