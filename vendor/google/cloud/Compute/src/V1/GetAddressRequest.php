<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for Addresses.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetAddressRequest</code>
 */
class GetAddressRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the address resource to return.
     *
     * Generated from protobuf field <code>string address = 462920692 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $address = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * Name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region = '';

    /**
     * @param string $project Project ID for this request.
     * @param string $region  Name of the region for this request.
     * @param string $address Name of the address resource to return.
     *
     * @return \Google\Cloud\Compute\V1\GetAddressRequest
     *
     * @experimental
     */
    public static function build(string $project, string $region, string $address): self
    {
        return (new self())
            ->setProject($project)
            ->setRegion($region)
            ->setAddress($address);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *           Name of the address resource to return.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           Name of the region for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the address resource to return.
     *
     * Generated from protobuf field <code>string address = 462920692 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Name of the address resource to return.
     *
     * Generated from protobuf field <code>string address = 462920692 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

