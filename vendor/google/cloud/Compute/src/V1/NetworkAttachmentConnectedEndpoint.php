<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Output Only] A connection connected to this network attachment.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkAttachmentConnectedEndpoint</code>
 */
class NetworkAttachmentConnectedEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * The IPv4 address assigned to the producer instance network interface. This value will be a range in case of Serverless.
     *
     * Generated from protobuf field <code>optional string ip_address = 406272220;</code>
     */
    private $ip_address = null;
    /**
     * The project id or number of the interface to which the IP was assigned.
     *
     * Generated from protobuf field <code>optional string project_id_or_num = 349783336;</code>
     */
    private $project_id_or_num = null;
    /**
     * Alias IP ranges from the same subnetwork.
     *
     * Generated from protobuf field <code>repeated string secondary_ip_cidr_ranges = 117184788;</code>
     */
    private $secondary_ip_cidr_ranges;
    /**
     * The status of a connected endpoint to this network attachment.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    private $status = null;
    /**
     * The subnetwork used to assign the IP to the producer instance network interface.
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     */
    private $subnetwork = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ip_address
     *           The IPv4 address assigned to the producer instance network interface. This value will be a range in case of Serverless.
     *     @type string $project_id_or_num
     *           The project id or number of the interface to which the IP was assigned.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $secondary_ip_cidr_ranges
     *           Alias IP ranges from the same subnetwork.
     *     @type string $status
     *           The status of a connected endpoint to this network attachment.
     *           Check the Status enum for the list of possible values.
     *     @type string $subnetwork
     *           The subnetwork used to assign the IP to the producer instance network interface.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The IPv4 address assigned to the producer instance network interface. This value will be a range in case of Serverless.
     *
     * Generated from protobuf field <code>optional string ip_address = 406272220;</code>
     * @return string
     */
    public function getIpAddress()
    {
        return isset($this->ip_address) ? $this->ip_address : '';
    }

    public function hasIpAddress()
    {
        return isset($this->ip_address);
    }

    public function clearIpAddress()
    {
        unset($this->ip_address);
    }

    /**
     * The IPv4 address assigned to the producer instance network interface. This value will be a range in case of Serverless.
     *
     * Generated from protobuf field <code>optional string ip_address = 406272220;</code>
     * @param string $var
     * @return $this
     */
    public function setIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_address = $var;

        return $this;
    }

    /**
     * The project id or number of the interface to which the IP was assigned.
     *
     * Generated from protobuf field <code>optional string project_id_or_num = 349783336;</code>
     * @return string
     */
    public function getProjectIdOrNum()
    {
        return isset($this->project_id_or_num) ? $this->project_id_or_num : '';
    }

    public function hasProjectIdOrNum()
    {
        return isset($this->project_id_or_num);
    }

    public function clearProjectIdOrNum()
    {
        unset($this->project_id_or_num);
    }

    /**
     * The project id or number of the interface to which the IP was assigned.
     *
     * Generated from protobuf field <code>optional string project_id_or_num = 349783336;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectIdOrNum($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id_or_num = $var;

        return $this;
    }

    /**
     * Alias IP ranges from the same subnetwork.
     *
     * Generated from protobuf field <code>repeated string secondary_ip_cidr_ranges = 117184788;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecondaryIpCidrRanges()
    {
        return $this->secondary_ip_cidr_ranges;
    }

    /**
     * Alias IP ranges from the same subnetwork.
     *
     * Generated from protobuf field <code>repeated string secondary_ip_cidr_ranges = 117184788;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecondaryIpCidrRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->secondary_ip_cidr_ranges = $arr;

        return $this;
    }

    /**
     * The status of a connected endpoint to this network attachment.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @return string
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : '';
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * The status of a connected endpoint to this network attachment.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * The subnetwork used to assign the IP to the producer instance network interface.
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return isset($this->subnetwork) ? $this->subnetwork : '';
    }

    public function hasSubnetwork()
    {
        return isset($this->subnetwork);
    }

    public function clearSubnetwork()
    {
        unset($this->subnetwork);
    }

    /**
     * The subnetwork used to assign the IP to the producer instance network interface.
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

}

