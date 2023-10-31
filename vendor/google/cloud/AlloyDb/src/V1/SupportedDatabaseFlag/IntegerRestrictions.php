<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1/resources.proto

namespace Google\Cloud\AlloyDb\V1\SupportedDatabaseFlag;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Restrictions on INTEGER type values.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1.SupportedDatabaseFlag.IntegerRestrictions</code>
 */
class IntegerRestrictions extends \Google\Protobuf\Internal\Message
{
    /**
     * The minimum value that can be specified, if applicable.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_value = 1;</code>
     */
    protected $min_value = null;
    /**
     * The maximum value that can be specified, if applicable.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_value = 2;</code>
     */
    protected $max_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $min_value
     *           The minimum value that can be specified, if applicable.
     *     @type \Google\Protobuf\Int64Value $max_value
     *           The maximum value that can be specified, if applicable.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The minimum value that can be specified, if applicable.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_value = 1;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getMinValue()
    {
        return $this->min_value;
    }

    public function hasMinValue()
    {
        return isset($this->min_value);
    }

    public function clearMinValue()
    {
        unset($this->min_value);
    }

    /**
     * Returns the unboxed value from <code>getMinValue()</code>

     * The minimum value that can be specified, if applicable.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_value = 1;</code>
     * @return int|string|null
     */
    public function getMinValueUnwrapped()
    {
        return $this->readWrapperValue("min_value");
    }

    /**
     * The minimum value that can be specified, if applicable.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_value = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setMinValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->min_value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The minimum value that can be specified, if applicable.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_value = 1;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setMinValueUnwrapped($var)
    {
        $this->writeWrapperValue("min_value", $var);
        return $this;}

    /**
     * The maximum value that can be specified, if applicable.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_value = 2;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getMaxValue()
    {
        return $this->max_value;
    }

    public function hasMaxValue()
    {
        return isset($this->max_value);
    }

    public function clearMaxValue()
    {
        unset($this->max_value);
    }

    /**
     * Returns the unboxed value from <code>getMaxValue()</code>

     * The maximum value that can be specified, if applicable.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_value = 2;</code>
     * @return int|string|null
     */
    public function getMaxValueUnwrapped()
    {
        return $this->readWrapperValue("max_value");
    }

    /**
     * The maximum value that can be specified, if applicable.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_value = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setMaxValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->max_value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The maximum value that can be specified, if applicable.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_value = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setMaxValueUnwrapped($var)
    {
        $this->writeWrapperValue("max_value", $var);
        return $this;}

}

