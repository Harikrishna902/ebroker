<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/channel_partner_links.proto

namespace Google\Cloud\Channel\V1;

use UnexpectedValueException;

/**
 * ChannelPartnerLinkState represents state of a channel partner link.
 *
 * Protobuf type <code>google.cloud.channel.v1.ChannelPartnerLinkState</code>
 */
class ChannelPartnerLinkState
{
    /**
     * Not used.
     *
     * Generated from protobuf enum <code>CHANNEL_PARTNER_LINK_STATE_UNSPECIFIED = 0;</code>
     */
    const CHANNEL_PARTNER_LINK_STATE_UNSPECIFIED = 0;
    /**
     * An invitation has been sent to the reseller to create a channel partner
     * link.
     *
     * Generated from protobuf enum <code>INVITED = 1;</code>
     */
    const INVITED = 1;
    /**
     * Status when the reseller is active.
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * Status when the reseller has been revoked by the distributor.
     *
     * Generated from protobuf enum <code>REVOKED = 3;</code>
     */
    const REVOKED = 3;
    /**
     * Status when the reseller is suspended by Google or distributor.
     *
     * Generated from protobuf enum <code>SUSPENDED = 4;</code>
     */
    const SUSPENDED = 4;

    private static $valueToName = [
        self::CHANNEL_PARTNER_LINK_STATE_UNSPECIFIED => 'CHANNEL_PARTNER_LINK_STATE_UNSPECIFIED',
        self::INVITED => 'INVITED',
        self::ACTIVE => 'ACTIVE',
        self::REVOKED => 'REVOKED',
        self::SUSPENDED => 'SUSPENDED',
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

