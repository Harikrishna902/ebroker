<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to request to list keys in a project.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.ListKeysResponse</code>
 */
class ListKeysResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Key details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.Key keys = 1;</code>
     */
    private $keys;
    /**
     * Token to retrieve the next page of results. It is set to empty if no keys
     * remain in results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\RecaptchaEnterprise\V1\Key>|\Google\Protobuf\Internal\RepeatedField $keys
     *           Key details.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results. It is set to empty if no keys
     *           remain in results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Key details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.Key keys = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * Key details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.Key keys = 1;</code>
     * @param array<\Google\Cloud\RecaptchaEnterprise\V1\Key>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecaptchaEnterprise\V1\Key::class);
        $this->keys = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results. It is set to empty if no keys
     * remain in results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results. It is set to empty if no keys
     * remain in results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

