<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/entitlement_changes.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Change event entry for Entitlement order history
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.EntitlementChange</code>
 */
class EntitlementChange extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of an entitlement in the form:
     * accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}
     *
     * Generated from protobuf field <code>string entitlement = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $entitlement = '';
    /**
     * Required. Resource name of the Offer at the time of change.
     * Takes the form: accounts/{account_id}/offers/{offer_id}.
     *
     * Generated from protobuf field <code>string offer = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $offer = '';
    /**
     * Service provisioned for an Entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ProvisionedService provisioned_service = 3;</code>
     */
    private $provisioned_service = null;
    /**
     * The change action type.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.EntitlementChange.ChangeType change_type = 4;</code>
     */
    private $change_type = 0;
    /**
     * The submitted time of the change.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
     */
    private $create_time = null;
    /**
     * Operator type responsible for the change.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.EntitlementChange.OperatorType operator_type = 6;</code>
     */
    private $operator_type = 0;
    /**
     * Extended parameters, such as:
     * purchase_order_number, gcp_details;
     * internal_correlation_id, long_running_operation_id, order_id;
     * etc.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Parameter parameters = 8;</code>
     */
    private $parameters;
    /**
     * Human-readable identifier that shows what operator made a change.
     * When the operator_type is RESELLER, this is the user's email address.
     * For all other operator types, this is empty.
     *
     * Generated from protobuf field <code>string operator = 12;</code>
     */
    private $operator = '';
    protected $change_reason;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $suspension_reason
     *           Suspension reason for the Entitlement.
     *     @type int $cancellation_reason
     *           Cancellation reason for the Entitlement.
     *     @type int $activation_reason
     *           The Entitlement's activation reason
     *     @type string $other_change_reason
     *           e.g. purchase_number change reason, entered by CRS.
     *     @type string $entitlement
     *           Required. Resource name of an entitlement in the form:
     *           accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}
     *     @type string $offer
     *           Required. Resource name of the Offer at the time of change.
     *           Takes the form: accounts/{account_id}/offers/{offer_id}.
     *     @type \Google\Cloud\Channel\V1\ProvisionedService $provisioned_service
     *           Service provisioned for an Entitlement.
     *     @type int $change_type
     *           The change action type.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The submitted time of the change.
     *     @type int $operator_type
     *           Operator type responsible for the change.
     *     @type array<\Google\Cloud\Channel\V1\Parameter>|\Google\Protobuf\Internal\RepeatedField $parameters
     *           Extended parameters, such as:
     *           purchase_order_number, gcp_details;
     *           internal_correlation_id, long_running_operation_id, order_id;
     *           etc.
     *     @type string $operator
     *           Human-readable identifier that shows what operator made a change.
     *           When the operator_type is RESELLER, this is the user's email address.
     *           For all other operator types, this is empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\EntitlementChanges::initOnce();
        parent::__construct($data);
    }

    /**
     * Suspension reason for the Entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Entitlement.SuspensionReason suspension_reason = 9;</code>
     * @return int
     */
    public function getSuspensionReason()
    {
        return $this->readOneof(9);
    }

    public function hasSuspensionReason()
    {
        return $this->hasOneof(9);
    }

    /**
     * Suspension reason for the Entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Entitlement.SuspensionReason suspension_reason = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setSuspensionReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\Entitlement\SuspensionReason::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Cancellation reason for the Entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.EntitlementChange.CancellationReason cancellation_reason = 10;</code>
     * @return int
     */
    public function getCancellationReason()
    {
        return $this->readOneof(10);
    }

    public function hasCancellationReason()
    {
        return $this->hasOneof(10);
    }

    /**
     * Cancellation reason for the Entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.EntitlementChange.CancellationReason cancellation_reason = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setCancellationReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\EntitlementChange\CancellationReason::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * The Entitlement's activation reason
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.EntitlementChange.ActivationReason activation_reason = 11;</code>
     * @return int
     */
    public function getActivationReason()
    {
        return $this->readOneof(11);
    }

    public function hasActivationReason()
    {
        return $this->hasOneof(11);
    }

    /**
     * The Entitlement's activation reason
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.EntitlementChange.ActivationReason activation_reason = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setActivationReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\EntitlementChange\ActivationReason::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * e.g. purchase_number change reason, entered by CRS.
     *
     * Generated from protobuf field <code>string other_change_reason = 100;</code>
     * @return string
     */
    public function getOtherChangeReason()
    {
        return $this->readOneof(100);
    }

    public function hasOtherChangeReason()
    {
        return $this->hasOneof(100);
    }

    /**
     * e.g. purchase_number change reason, entered by CRS.
     *
     * Generated from protobuf field <code>string other_change_reason = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setOtherChangeReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * Required. Resource name of an entitlement in the form:
     * accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}
     *
     * Generated from protobuf field <code>string entitlement = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEntitlement()
    {
        return $this->entitlement;
    }

    /**
     * Required. Resource name of an entitlement in the form:
     * accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}
     *
     * Generated from protobuf field <code>string entitlement = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEntitlement($var)
    {
        GPBUtil::checkString($var, True);
        $this->entitlement = $var;

        return $this;
    }

    /**
     * Required. Resource name of the Offer at the time of change.
     * Takes the form: accounts/{account_id}/offers/{offer_id}.
     *
     * Generated from protobuf field <code>string offer = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Required. Resource name of the Offer at the time of change.
     * Takes the form: accounts/{account_id}/offers/{offer_id}.
     *
     * Generated from protobuf field <code>string offer = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOffer($var)
    {
        GPBUtil::checkString($var, True);
        $this->offer = $var;

        return $this;
    }

    /**
     * Service provisioned for an Entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ProvisionedService provisioned_service = 3;</code>
     * @return \Google\Cloud\Channel\V1\ProvisionedService|null
     */
    public function getProvisionedService()
    {
        return $this->provisioned_service;
    }

    public function hasProvisionedService()
    {
        return isset($this->provisioned_service);
    }

    public function clearProvisionedService()
    {
        unset($this->provisioned_service);
    }

    /**
     * Service provisioned for an Entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ProvisionedService provisioned_service = 3;</code>
     * @param \Google\Cloud\Channel\V1\ProvisionedService $var
     * @return $this
     */
    public function setProvisionedService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\ProvisionedService::class);
        $this->provisioned_service = $var;

        return $this;
    }

    /**
     * The change action type.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.EntitlementChange.ChangeType change_type = 4;</code>
     * @return int
     */
    public function getChangeType()
    {
        return $this->change_type;
    }

    /**
     * The change action type.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.EntitlementChange.ChangeType change_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setChangeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\EntitlementChange\ChangeType::class);
        $this->change_type = $var;

        return $this;
    }

    /**
     * The submitted time of the change.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * The submitted time of the change.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Operator type responsible for the change.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.EntitlementChange.OperatorType operator_type = 6;</code>
     * @return int
     */
    public function getOperatorType()
    {
        return $this->operator_type;
    }

    /**
     * Operator type responsible for the change.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.EntitlementChange.OperatorType operator_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOperatorType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\EntitlementChange\OperatorType::class);
        $this->operator_type = $var;

        return $this;
    }

    /**
     * Extended parameters, such as:
     * purchase_order_number, gcp_details;
     * internal_correlation_id, long_running_operation_id, order_id;
     * etc.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Parameter parameters = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Extended parameters, such as:
     * purchase_order_number, gcp_details;
     * internal_correlation_id, long_running_operation_id, order_id;
     * etc.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Parameter parameters = 8;</code>
     * @param array<\Google\Cloud\Channel\V1\Parameter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\Parameter::class);
        $this->parameters = $arr;

        return $this;
    }

    /**
     * Human-readable identifier that shows what operator made a change.
     * When the operator_type is RESELLER, this is the user's email address.
     * For all other operator types, this is empty.
     *
     * Generated from protobuf field <code>string operator = 12;</code>
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Human-readable identifier that shows what operator made a change.
     * When the operator_type is RESELLER, this is the user's email address.
     * For all other operator types, this is empty.
     *
     * Generated from protobuf field <code>string operator = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkString($var, True);
        $this->operator = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getChangeReason()
    {
        return $this->whichOneof("change_reason");
    }

}

