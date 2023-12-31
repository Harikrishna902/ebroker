<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.DiskResourceStatus</code>
 */
class DiskResourceStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.DiskResourceStatusAsyncReplicationStatus async_primary_disk = 180517533;</code>
     */
    private $async_primary_disk = null;
    /**
     * Key: disk, value: AsyncReplicationStatus message
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.DiskResourceStatusAsyncReplicationStatus> async_secondary_disks = 322925608;</code>
     */
    private $async_secondary_disks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\DiskResourceStatusAsyncReplicationStatus $async_primary_disk
     *     @type array|\Google\Protobuf\Internal\MapField $async_secondary_disks
     *           Key: disk, value: AsyncReplicationStatus message
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.DiskResourceStatusAsyncReplicationStatus async_primary_disk = 180517533;</code>
     * @return \Google\Cloud\Compute\V1\DiskResourceStatusAsyncReplicationStatus|null
     */
    public function getAsyncPrimaryDisk()
    {
        return $this->async_primary_disk;
    }

    public function hasAsyncPrimaryDisk()
    {
        return isset($this->async_primary_disk);
    }

    public function clearAsyncPrimaryDisk()
    {
        unset($this->async_primary_disk);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.DiskResourceStatusAsyncReplicationStatus async_primary_disk = 180517533;</code>
     * @param \Google\Cloud\Compute\V1\DiskResourceStatusAsyncReplicationStatus $var
     * @return $this
     */
    public function setAsyncPrimaryDisk($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\DiskResourceStatusAsyncReplicationStatus::class);
        $this->async_primary_disk = $var;

        return $this;
    }

    /**
     * Key: disk, value: AsyncReplicationStatus message
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.DiskResourceStatusAsyncReplicationStatus> async_secondary_disks = 322925608;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAsyncSecondaryDisks()
    {
        return $this->async_secondary_disks;
    }

    /**
     * Key: disk, value: AsyncReplicationStatus message
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.DiskResourceStatusAsyncReplicationStatus> async_secondary_disks = 322925608;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAsyncSecondaryDisks($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\DiskResourceStatusAsyncReplicationStatus::class);
        $this->async_secondary_disks = $arr;

        return $this;
    }

}

