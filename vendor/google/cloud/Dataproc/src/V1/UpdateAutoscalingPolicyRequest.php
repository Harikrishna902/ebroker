<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/autoscaling_policies.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to update an autoscaling policy.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.UpdateAutoscalingPolicyRequest</code>
 */
class UpdateAutoscalingPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The updated autoscaling policy.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.AutoscalingPolicy policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $policy = null;

    /**
     * @param \Google\Cloud\Dataproc\V1\AutoscalingPolicy $policy Required. The updated autoscaling policy.
     *
     * @return \Google\Cloud\Dataproc\V1\UpdateAutoscalingPolicyRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Dataproc\V1\AutoscalingPolicy $policy): self
    {
        return (new self())
            ->setPolicy($policy);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataproc\V1\AutoscalingPolicy $policy
     *           Required. The updated autoscaling policy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\AutoscalingPolicies::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The updated autoscaling policy.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.AutoscalingPolicy policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataproc\V1\AutoscalingPolicy|null
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    public function hasPolicy()
    {
        return isset($this->policy);
    }

    public function clearPolicy()
    {
        unset($this->policy);
    }

    /**
     * Required. The updated autoscaling policy.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.AutoscalingPolicy policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataproc\V1\AutoscalingPolicy $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\AutoscalingPolicy::class);
        $this->policy = $var;

        return $this;
    }

}
