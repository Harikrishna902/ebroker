<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Collection of [GCP
 * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels).
 *
 * Generated from protobuf message <code>google.container.v1.ResourceLabels</code>
 */
class ResourceLabels extends \Google\Protobuf\Internal\Message
{
    /**
     * Map of node label keys and node label values.
     *
     * Generated from protobuf field <code>map<string, string> labels = 1;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Map of node label keys and node label values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Map of node label keys and node label values.
     *
     * Generated from protobuf field <code>map<string, string> labels = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Map of node label keys and node label values.
     *
     * Generated from protobuf field <code>map<string, string> labels = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

