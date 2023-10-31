<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use UnexpectedValueException;

/**
 * ErrorFrameView can be specified in ErrorFrames List and Get requests to
 * control the level of details that is returned for the original frame.
 *
 * Protobuf type <code>google.cloud.migrationcenter.v1.ErrorFrameView</code>
 */
class ErrorFrameView
{
    /**
     * Value is unset. The system will fallback to the default value.
     *
     * Generated from protobuf enum <code>ERROR_FRAME_VIEW_UNSPECIFIED = 0;</code>
     */
    const ERROR_FRAME_VIEW_UNSPECIFIED = 0;
    /**
     * Include basic frame data, but not the full contents.
     *
     * Generated from protobuf enum <code>ERROR_FRAME_VIEW_BASIC = 1;</code>
     */
    const ERROR_FRAME_VIEW_BASIC = 1;
    /**
     * Include everything.
     *
     * Generated from protobuf enum <code>ERROR_FRAME_VIEW_FULL = 2;</code>
     */
    const ERROR_FRAME_VIEW_FULL = 2;

    private static $valueToName = [
        self::ERROR_FRAME_VIEW_UNSPECIFIED => 'ERROR_FRAME_VIEW_UNSPECIFIED',
        self::ERROR_FRAME_VIEW_BASIC => 'ERROR_FRAME_VIEW_BASIC',
        self::ERROR_FRAME_VIEW_FULL => 'ERROR_FRAME_VIEW_FULL',
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
