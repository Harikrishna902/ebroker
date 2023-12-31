<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/query.proto

namespace Google\Cloud\Firestore\V1\StructuredAggregationQuery\Aggregation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Average of the values of the requested field.
 * * Only numeric values will be aggregated. All non-numeric values
 * including `NULL` are skipped.
 * * If the aggregated values contain `NaN`, returns `NaN`. Infinity math
 * follows IEEE-754 standards.
 * * If the aggregated value set is empty, returns `NULL`.
 * * Always returns the result as a double.
 *
 * Generated from protobuf message <code>google.firestore.v1.StructuredAggregationQuery.Aggregation.Avg</code>
 */
class Avg extends \Google\Protobuf\Internal\Message
{
    /**
     * The field to aggregate on.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldReference field = 1;</code>
     */
    private $field = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Firestore\V1\StructuredQuery\FieldReference $field
     *           The field to aggregate on.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * The field to aggregate on.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldReference field = 1;</code>
     * @return \Google\Cloud\Firestore\V1\StructuredQuery\FieldReference|null
     */
    public function getField()
    {
        return $this->field;
    }

    public function hasField()
    {
        return isset($this->field);
    }

    public function clearField()
    {
        unset($this->field);
    }

    /**
     * The field to aggregate on.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldReference field = 1;</code>
     * @param \Google\Cloud\Firestore\V1\StructuredQuery\FieldReference $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\StructuredQuery\FieldReference::class);
        $this->field = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Avg::class, \Google\Cloud\Firestore\V1\StructuredAggregationQuery_Aggregation_Avg::class);

