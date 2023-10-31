<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/configmanagement/configmanagement.proto

namespace Google\Cloud\GkeHub\ConfigManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for Hierarchy Controller
 *
 * Generated from protobuf message <code>google.cloud.gkehub.configmanagement.v1.HierarchyControllerConfig</code>
 */
class HierarchyControllerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether Hierarchy Controller is enabled in this cluster.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     */
    private $enabled = false;
    /**
     * Whether pod tree labels are enabled in this cluster.
     *
     * Generated from protobuf field <code>bool enable_pod_tree_labels = 2;</code>
     */
    private $enable_pod_tree_labels = false;
    /**
     * Whether hierarchical resource quota is enabled in this cluster.
     *
     * Generated from protobuf field <code>bool enable_hierarchical_resource_quota = 3;</code>
     */
    private $enable_hierarchical_resource_quota = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Whether Hierarchy Controller is enabled in this cluster.
     *     @type bool $enable_pod_tree_labels
     *           Whether pod tree labels are enabled in this cluster.
     *     @type bool $enable_hierarchical_resource_quota
     *           Whether hierarchical resource quota is enabled in this cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Configmanagement\Configmanagement::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether Hierarchy Controller is enabled in this cluster.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Whether Hierarchy Controller is enabled in this cluster.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Whether pod tree labels are enabled in this cluster.
     *
     * Generated from protobuf field <code>bool enable_pod_tree_labels = 2;</code>
     * @return bool
     */
    public function getEnablePodTreeLabels()
    {
        return $this->enable_pod_tree_labels;
    }

    /**
     * Whether pod tree labels are enabled in this cluster.
     *
     * Generated from protobuf field <code>bool enable_pod_tree_labels = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnablePodTreeLabels($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_pod_tree_labels = $var;

        return $this;
    }

    /**
     * Whether hierarchical resource quota is enabled in this cluster.
     *
     * Generated from protobuf field <code>bool enable_hierarchical_resource_quota = 3;</code>
     * @return bool
     */
    public function getEnableHierarchicalResourceQuota()
    {
        return $this->enable_hierarchical_resource_quota;
    }

    /**
     * Whether hierarchical resource quota is enabled in this cluster.
     *
     * Generated from protobuf field <code>bool enable_hierarchical_resource_quota = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableHierarchicalResourceQuota($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_hierarchical_resource_quota = $var;

        return $this;
    }

}
