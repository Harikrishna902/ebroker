<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * VMware disk config details.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.VmwareDiskConfig</code>
 */
class VmwareDiskConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * VMDK backing type.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.VmwareDiskConfig.BackingType backing_type = 1;</code>
     */
    protected $backing_type = 0;
    /**
     * Is VMDK shared with other VMs.
     *
     * Generated from protobuf field <code>bool shared = 2;</code>
     */
    protected $shared = false;
    /**
     * VMDK disk mode.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.VmwareDiskConfig.VmdkMode vmdk_mode = 3;</code>
     */
    protected $vmdk_mode = 0;
    /**
     * RDM compatibility mode.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.VmwareDiskConfig.RdmCompatibility rdm_compatibility = 4;</code>
     */
    protected $rdm_compatibility = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $backing_type
     *           VMDK backing type.
     *     @type bool $shared
     *           Is VMDK shared with other VMs.
     *     @type int $vmdk_mode
     *           VMDK disk mode.
     *     @type int $rdm_compatibility
     *           RDM compatibility mode.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * VMDK backing type.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.VmwareDiskConfig.BackingType backing_type = 1;</code>
     * @return int
     */
    public function getBackingType()
    {
        return $this->backing_type;
    }

    /**
     * VMDK backing type.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.VmwareDiskConfig.BackingType backing_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBackingType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\MigrationCenter\V1\VmwareDiskConfig\BackingType::class);
        $this->backing_type = $var;

        return $this;
    }

    /**
     * Is VMDK shared with other VMs.
     *
     * Generated from protobuf field <code>bool shared = 2;</code>
     * @return bool
     */
    public function getShared()
    {
        return $this->shared;
    }

    /**
     * Is VMDK shared with other VMs.
     *
     * Generated from protobuf field <code>bool shared = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setShared($var)
    {
        GPBUtil::checkBool($var);
        $this->shared = $var;

        return $this;
    }

    /**
     * VMDK disk mode.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.VmwareDiskConfig.VmdkMode vmdk_mode = 3;</code>
     * @return int
     */
    public function getVmdkMode()
    {
        return $this->vmdk_mode;
    }

    /**
     * VMDK disk mode.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.VmwareDiskConfig.VmdkMode vmdk_mode = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setVmdkMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\MigrationCenter\V1\VmwareDiskConfig\VmdkMode::class);
        $this->vmdk_mode = $var;

        return $this;
    }

    /**
     * RDM compatibility mode.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.VmwareDiskConfig.RdmCompatibility rdm_compatibility = 4;</code>
     * @return int
     */
    public function getRdmCompatibility()
    {
        return $this->rdm_compatibility;
    }

    /**
     * RDM compatibility mode.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.VmwareDiskConfig.RdmCompatibility rdm_compatibility = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRdmCompatibility($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\MigrationCenter\V1\VmwareDiskConfig\RdmCompatibility::class);
        $this->rdm_compatibility = $var;

        return $this;
    }

}

