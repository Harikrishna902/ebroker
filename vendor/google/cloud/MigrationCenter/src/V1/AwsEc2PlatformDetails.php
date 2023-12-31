<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AWS EC2 specific details.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.AwsEc2PlatformDetails</code>
 */
class AwsEc2PlatformDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * AWS platform's machine type label.
     *
     * Generated from protobuf field <code>string machine_type_label = 1;</code>
     */
    protected $machine_type_label = '';
    /**
     * The location of the machine in the AWS format.
     *
     * Generated from protobuf field <code>string location = 2;</code>
     */
    protected $location = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $machine_type_label
     *           AWS platform's machine type label.
     *     @type string $location
     *           The location of the machine in the AWS format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * AWS platform's machine type label.
     *
     * Generated from protobuf field <code>string machine_type_label = 1;</code>
     * @return string
     */
    public function getMachineTypeLabel()
    {
        return $this->machine_type_label;
    }

    /**
     * AWS platform's machine type label.
     *
     * Generated from protobuf field <code>string machine_type_label = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineTypeLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type_label = $var;

        return $this;
    }

    /**
     * The location of the machine in the AWS format.
     *
     * Generated from protobuf field <code>string location = 2;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The location of the machine in the AWS format.
     *
     * Generated from protobuf field <code>string location = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

}

