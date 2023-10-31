<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification determining how headers are added to requests or responses.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.HttpHeaderOption</code>
 */
class HttpHeaderOption extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the header.
     *
     * Generated from protobuf field <code>optional string header_name = 110223613;</code>
     */
    private $header_name = null;
    /**
     * The value of the header to add.
     *
     * Generated from protobuf field <code>optional string header_value = 203094335;</code>
     */
    private $header_value = null;
    /**
     * If false, headerValue is appended to any values that already exist for the header. If true, headerValue is set for the header, discarding any values that were set for that header. The default value is false. 
     *
     * Generated from protobuf field <code>optional bool replace = 20755124;</code>
     */
    private $replace = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $header_name
     *           The name of the header.
     *     @type string $header_value
     *           The value of the header to add.
     *     @type bool $replace
     *           If false, headerValue is appended to any values that already exist for the header. If true, headerValue is set for the header, discarding any values that were set for that header. The default value is false. 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the header.
     *
     * Generated from protobuf field <code>optional string header_name = 110223613;</code>
     * @return string
     */
    public function getHeaderName()
    {
        return isset($this->header_name) ? $this->header_name : '';
    }

    public function hasHeaderName()
    {
        return isset($this->header_name);
    }

    public function clearHeaderName()
    {
        unset($this->header_name);
    }

    /**
     * The name of the header.
     *
     * Generated from protobuf field <code>optional string header_name = 110223613;</code>
     * @param string $var
     * @return $this
     */
    public function setHeaderName($var)
    {
        GPBUtil::checkString($var, True);
        $this->header_name = $var;

        return $this;
    }

    /**
     * The value of the header to add.
     *
     * Generated from protobuf field <code>optional string header_value = 203094335;</code>
     * @return string
     */
    public function getHeaderValue()
    {
        return isset($this->header_value) ? $this->header_value : '';
    }

    public function hasHeaderValue()
    {
        return isset($this->header_value);
    }

    public function clearHeaderValue()
    {
        unset($this->header_value);
    }

    /**
     * The value of the header to add.
     *
     * Generated from protobuf field <code>optional string header_value = 203094335;</code>
     * @param string $var
     * @return $this
     */
    public function setHeaderValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->header_value = $var;

        return $this;
    }

    /**
     * If false, headerValue is appended to any values that already exist for the header. If true, headerValue is set for the header, discarding any values that were set for that header. The default value is false. 
     *
     * Generated from protobuf field <code>optional bool replace = 20755124;</code>
     * @return bool
     */
    public function getReplace()
    {
        return isset($this->replace) ? $this->replace : false;
    }

    public function hasReplace()
    {
        return isset($this->replace);
    }

    public function clearReplace()
    {
        unset($this->replace);
    }

    /**
     * If false, headerValue is appended to any values that already exist for the header. If true, headerValue is set for the header, discarding any values that were set for that header. The default value is false. 
     *
     * Generated from protobuf field <code>optional bool replace = 20755124;</code>
     * @param bool $var
     * @return $this
     */
    public function setReplace($var)
    {
        GPBUtil::checkBool($var);
        $this->replace = $var;

        return $this;
    }

}

