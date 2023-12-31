<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/publisher_model.proto

namespace Google\Cloud\AIPlatform\V1\PublisherModel\CallToAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The regional resource name or the URI. Key is region, e.g.,
 * us-central1, europe-west2, global, etc..
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PublisherModel.CallToAction.RegionalResourceReferences</code>
 */
class RegionalResourceReferences extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.PublisherModel.ResourceReference> references = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $references;
    /**
     * Required. The title of the regional resource reference.
     *
     * Generated from protobuf field <code>string title = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $title = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $references
     *           Required.
     *     @type string $title
     *           Required. The title of the regional resource reference.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PublisherModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Required.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.PublisherModel.ResourceReference> references = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * Required.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.PublisherModel.ResourceReference> references = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setReferences($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\PublisherModel\ResourceReference::class);
        $this->references = $arr;

        return $this;
    }

    /**
     * Required. The title of the regional resource reference.
     *
     * Generated from protobuf field <code>string title = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Required. The title of the regional resource reference.
     *
     * Generated from protobuf field <code>string title = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

}


