<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/task.proto

namespace Google\Cloud\Batch\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Compute resource requirements
 *
 * Generated from protobuf message <code>google.cloud.batch.v1.ComputeResource</code>
 */
class ComputeResource extends \Google\Protobuf\Internal\Message
{
    /**
     * The milliCPU count.
     *
     * Generated from protobuf field <code>int64 cpu_milli = 1;</code>
     */
    private $cpu_milli = 0;
    /**
     * Memory in MiB.
     *
     * Generated from protobuf field <code>int64 memory_mib = 2;</code>
     */
    private $memory_mib = 0;
    /**
     * Extra boot disk size in MiB for each task.
     *
     * Generated from protobuf field <code>int64 boot_disk_mib = 4;</code>
     */
    private $boot_disk_mib = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $cpu_milli
     *           The milliCPU count.
     *     @type int|string $memory_mib
     *           Memory in MiB.
     *     @type int|string $boot_disk_mib
     *           Extra boot disk size in MiB for each task.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Batch\V1\Task::initOnce();
        parent::__construct($data);
    }

    /**
     * The milliCPU count.
     *
     * Generated from protobuf field <code>int64 cpu_milli = 1;</code>
     * @return int|string
     */
    public function getCpuMilli()
    {
        return $this->cpu_milli;
    }

    /**
     * The milliCPU count.
     *
     * Generated from protobuf field <code>int64 cpu_milli = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCpuMilli($var)
    {
        GPBUtil::checkInt64($var);
        $this->cpu_milli = $var;

        return $this;
    }

    /**
     * Memory in MiB.
     *
     * Generated from protobuf field <code>int64 memory_mib = 2;</code>
     * @return int|string
     */
    public function getMemoryMib()
    {
        return $this->memory_mib;
    }

    /**
     * Memory in MiB.
     *
     * Generated from protobuf field <code>int64 memory_mib = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemoryMib($var)
    {
        GPBUtil::checkInt64($var);
        $this->memory_mib = $var;

        return $this;
    }

    /**
     * Extra boot disk size in MiB for each task.
     *
     * Generated from protobuf field <code>int64 boot_disk_mib = 4;</code>
     * @return int|string
     */
    public function getBootDiskMib()
    {
        return $this->boot_disk_mib;
    }

    /**
     * Extra boot disk size in MiB for each task.
     *
     * Generated from protobuf field <code>int64 boot_disk_mib = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBootDiskMib($var)
    {
        GPBUtil::checkInt64($var);
        $this->boot_disk_mib = $var;

        return $this;
    }

}

