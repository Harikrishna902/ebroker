<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/membership.proto

namespace Google\Cloud\GkeHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KubernetesResource contains the YAML manifests and configuration for
 * Membership Kubernetes resources in the cluster. After CreateMembership or
 * UpdateMembership, these resources should be re-applied in the cluster.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1.KubernetesResource</code>
 */
class KubernetesResource extends \Google\Protobuf\Internal\Message
{
    /**
     * Input only. The YAML representation of the Membership CR. This field is
     * ignored for GKE clusters where Hub can read the CR directly.
     * Callers should provide the CR that is currently present in the cluster
     * during CreateMembership or UpdateMembership, or leave this field empty if
     * none exists. The CR manifest is used to validate the cluster has not been
     * registered with another Membership.
     *
     * Generated from protobuf field <code>string membership_cr_manifest = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $membership_cr_manifest = '';
    /**
     * Output only. Additional Kubernetes resources that need to be applied to the
     * cluster after Membership creation, and after every update.
     * This field is only populated in the Membership returned from a successful
     * long-running operation from CreateMembership or UpdateMembership. It is not
     * populated during normal GetMembership or ListMemberships requests. To get
     * the resource manifest after the initial registration, the caller should
     * make a UpdateMembership call with an empty field mask.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.v1.ResourceManifest membership_resources = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $membership_resources;
    /**
     * Output only. The Kubernetes resources for installing the GKE Connect agent
     * This field is only populated in the Membership returned from a successful
     * long-running operation from CreateMembership or UpdateMembership. It is not
     * populated during normal GetMembership or ListMemberships requests. To get
     * the resource manifest after the initial registration, the caller should
     * make a UpdateMembership call with an empty field mask.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.v1.ResourceManifest connect_resources = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $connect_resources;
    /**
     * Optional. Options for Kubernetes resource generation.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1.ResourceOptions resource_options = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $resource_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $membership_cr_manifest
     *           Input only. The YAML representation of the Membership CR. This field is
     *           ignored for GKE clusters where Hub can read the CR directly.
     *           Callers should provide the CR that is currently present in the cluster
     *           during CreateMembership or UpdateMembership, or leave this field empty if
     *           none exists. The CR manifest is used to validate the cluster has not been
     *           registered with another Membership.
     *     @type array<\Google\Cloud\GkeHub\V1\ResourceManifest>|\Google\Protobuf\Internal\RepeatedField $membership_resources
     *           Output only. Additional Kubernetes resources that need to be applied to the
     *           cluster after Membership creation, and after every update.
     *           This field is only populated in the Membership returned from a successful
     *           long-running operation from CreateMembership or UpdateMembership. It is not
     *           populated during normal GetMembership or ListMemberships requests. To get
     *           the resource manifest after the initial registration, the caller should
     *           make a UpdateMembership call with an empty field mask.
     *     @type array<\Google\Cloud\GkeHub\V1\ResourceManifest>|\Google\Protobuf\Internal\RepeatedField $connect_resources
     *           Output only. The Kubernetes resources for installing the GKE Connect agent
     *           This field is only populated in the Membership returned from a successful
     *           long-running operation from CreateMembership or UpdateMembership. It is not
     *           populated during normal GetMembership or ListMemberships requests. To get
     *           the resource manifest after the initial registration, the caller should
     *           make a UpdateMembership call with an empty field mask.
     *     @type \Google\Cloud\GkeHub\V1\ResourceOptions $resource_options
     *           Optional. Options for Kubernetes resource generation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Membership::initOnce();
        parent::__construct($data);
    }

    /**
     * Input only. The YAML representation of the Membership CR. This field is
     * ignored for GKE clusters where Hub can read the CR directly.
     * Callers should provide the CR that is currently present in the cluster
     * during CreateMembership or UpdateMembership, or leave this field empty if
     * none exists. The CR manifest is used to validate the cluster has not been
     * registered with another Membership.
     *
     * Generated from protobuf field <code>string membership_cr_manifest = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getMembershipCrManifest()
    {
        return $this->membership_cr_manifest;
    }

    /**
     * Input only. The YAML representation of the Membership CR. This field is
     * ignored for GKE clusters where Hub can read the CR directly.
     * Callers should provide the CR that is currently present in the cluster
     * during CreateMembership or UpdateMembership, or leave this field empty if
     * none exists. The CR manifest is used to validate the cluster has not been
     * registered with another Membership.
     *
     * Generated from protobuf field <code>string membership_cr_manifest = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setMembershipCrManifest($var)
    {
        GPBUtil::checkString($var, True);
        $this->membership_cr_manifest = $var;

        return $this;
    }

    /**
     * Output only. Additional Kubernetes resources that need to be applied to the
     * cluster after Membership creation, and after every update.
     * This field is only populated in the Membership returned from a successful
     * long-running operation from CreateMembership or UpdateMembership. It is not
     * populated during normal GetMembership or ListMemberships requests. To get
     * the resource manifest after the initial registration, the caller should
     * make a UpdateMembership call with an empty field mask.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.v1.ResourceManifest membership_resources = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMembershipResources()
    {
        return $this->membership_resources;
    }

    /**
     * Output only. Additional Kubernetes resources that need to be applied to the
     * cluster after Membership creation, and after every update.
     * This field is only populated in the Membership returned from a successful
     * long-running operation from CreateMembership or UpdateMembership. It is not
     * populated during normal GetMembership or ListMemberships requests. To get
     * the resource manifest after the initial registration, the caller should
     * make a UpdateMembership call with an empty field mask.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.v1.ResourceManifest membership_resources = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\GkeHub\V1\ResourceManifest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMembershipResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeHub\V1\ResourceManifest::class);
        $this->membership_resources = $arr;

        return $this;
    }

    /**
     * Output only. The Kubernetes resources for installing the GKE Connect agent
     * This field is only populated in the Membership returned from a successful
     * long-running operation from CreateMembership or UpdateMembership. It is not
     * populated during normal GetMembership or ListMemberships requests. To get
     * the resource manifest after the initial registration, the caller should
     * make a UpdateMembership call with an empty field mask.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.v1.ResourceManifest connect_resources = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConnectResources()
    {
        return $this->connect_resources;
    }

    /**
     * Output only. The Kubernetes resources for installing the GKE Connect agent
     * This field is only populated in the Membership returned from a successful
     * long-running operation from CreateMembership or UpdateMembership. It is not
     * populated during normal GetMembership or ListMemberships requests. To get
     * the resource manifest after the initial registration, the caller should
     * make a UpdateMembership call with an empty field mask.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.v1.ResourceManifest connect_resources = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\GkeHub\V1\ResourceManifest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConnectResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeHub\V1\ResourceManifest::class);
        $this->connect_resources = $arr;

        return $this;
    }

    /**
     * Optional. Options for Kubernetes resource generation.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1.ResourceOptions resource_options = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeHub\V1\ResourceOptions|null
     */
    public function getResourceOptions()
    {
        return $this->resource_options;
    }

    public function hasResourceOptions()
    {
        return isset($this->resource_options);
    }

    public function clearResourceOptions()
    {
        unset($this->resource_options);
    }

    /**
     * Optional. Options for Kubernetes resource generation.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1.ResourceOptions resource_options = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeHub\V1\ResourceOptions $var
     * @return $this
     */
    public function setResourceOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\V1\ResourceOptions::class);
        $this->resource_options = $var;

        return $this;
    }

}

