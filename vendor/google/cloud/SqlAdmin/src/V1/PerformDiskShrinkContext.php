<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Perform disk shrink context.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.PerformDiskShrinkContext</code>
 */
class PerformDiskShrinkContext extends \Google\Protobuf\Internal\Message
{
    /**
     * The target disk shrink size in GigaBytes.
     *
     * Generated from protobuf field <code>int64 target_size_gb = 1;</code>
     */
    private $target_size_gb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $target_size_gb
     *           The target disk shrink size in GigaBytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The target disk shrink size in GigaBytes.
     *
     * Generated from protobuf field <code>int64 target_size_gb = 1;</code>
     * @return int|string
     */
    public function getTargetSizeGb()
    {
        return $this->target_size_gb;
    }

    /**
     * The target disk shrink size in GigaBytes.
     *
     * Generated from protobuf field <code>int64 target_size_gb = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTargetSizeGb($var)
    {
        GPBUtil::checkInt64($var);
        $this->target_size_gb = $var;

        return $this;
    }

}

