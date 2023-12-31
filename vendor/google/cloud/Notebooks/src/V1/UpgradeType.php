<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/service.proto

namespace Google\Cloud\Notebooks\V1;

use UnexpectedValueException;

/**
 * Definition of the types of upgrade that can be used on this
 * instance.
 *
 * Protobuf type <code>google.cloud.notebooks.v1.UpgradeType</code>
 */
class UpgradeType
{
    /**
     * Upgrade type is not specified.
     *
     * Generated from protobuf enum <code>UPGRADE_TYPE_UNSPECIFIED = 0;</code>
     */
    const UPGRADE_TYPE_UNSPECIFIED = 0;
    /**
     * Upgrade ML framework.
     *
     * Generated from protobuf enum <code>UPGRADE_FRAMEWORK = 1;</code>
     */
    const UPGRADE_FRAMEWORK = 1;
    /**
     * Upgrade Operating System.
     *
     * Generated from protobuf enum <code>UPGRADE_OS = 2;</code>
     */
    const UPGRADE_OS = 2;
    /**
     * Upgrade CUDA.
     *
     * Generated from protobuf enum <code>UPGRADE_CUDA = 3;</code>
     */
    const UPGRADE_CUDA = 3;
    /**
     * Upgrade All (OS, Framework and CUDA).
     *
     * Generated from protobuf enum <code>UPGRADE_ALL = 4;</code>
     */
    const UPGRADE_ALL = 4;

    private static $valueToName = [
        self::UPGRADE_TYPE_UNSPECIFIED => 'UPGRADE_TYPE_UNSPECIFIED',
        self::UPGRADE_FRAMEWORK => 'UPGRADE_FRAMEWORK',
        self::UPGRADE_OS => 'UPGRADE_OS',
        self::UPGRADE_CUDA => 'UPGRADE_CUDA',
        self::UPGRADE_ALL => 'UPGRADE_ALL',
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

