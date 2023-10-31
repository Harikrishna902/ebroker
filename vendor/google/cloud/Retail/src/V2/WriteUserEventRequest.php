<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/user_event_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for WriteUserEvent method.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.WriteUserEventRequest</code>
 */
class WriteUserEventRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent catalog resource name, such as
     * `projects/1234/locations/global/catalogs/default_catalog`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parent = '';
    /**
     * Required. User event to write.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.UserEvent user_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $user_event = null;
    /**
     * If set to true, the user event will be written asynchronously after
     * validation, and the API will respond without waiting for the write.
     * Therefore, silent failures can occur even if the API returns success. In
     * case of silent failures, error messages can be found in Stackdriver logs.
     *
     * Generated from protobuf field <code>bool write_async = 3;</code>
     */
    private $write_async = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent catalog resource name, such as
     *           `projects/1234/locations/global/catalogs/default_catalog`.
     *     @type \Google\Cloud\Retail\V2\UserEvent $user_event
     *           Required. User event to write.
     *     @type bool $write_async
     *           If set to true, the user event will be written asynchronously after
     *           validation, and the API will respond without waiting for the write.
     *           Therefore, silent failures can occur even if the API returns success. In
     *           case of silent failures, error messages can be found in Stackdriver logs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\UserEventService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent catalog resource name, such as
     * `projects/1234/locations/global/catalogs/default_catalog`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent catalog resource name, such as
     * `projects/1234/locations/global/catalogs/default_catalog`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. User event to write.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.UserEvent user_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Retail\V2\UserEvent|null
     */
    public function getUserEvent()
    {
        return $this->user_event;
    }

    public function hasUserEvent()
    {
        return isset($this->user_event);
    }

    public function clearUserEvent()
    {
        unset($this->user_event);
    }

    /**
     * Required. User event to write.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.UserEvent user_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Retail\V2\UserEvent $var
     * @return $this
     */
    public function setUserEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\UserEvent::class);
        $this->user_event = $var;

        return $this;
    }

    /**
     * If set to true, the user event will be written asynchronously after
     * validation, and the API will respond without waiting for the write.
     * Therefore, silent failures can occur even if the API returns success. In
     * case of silent failures, error messages can be found in Stackdriver logs.
     *
     * Generated from protobuf field <code>bool write_async = 3;</code>
     * @return bool
     */
    public function getWriteAsync()
    {
        return $this->write_async;
    }

    /**
     * If set to true, the user event will be written asynchronously after
     * validation, and the API will respond without waiting for the write.
     * Therefore, silent failures can occur even if the API returns success. In
     * case of silent failures, error messages can be found in Stackdriver logs.
     *
     * Generated from protobuf field <code>bool write_async = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setWriteAsync($var)
    {
        GPBUtil::checkBool($var);
        $this->write_async = $var;

        return $this;
    }

}
