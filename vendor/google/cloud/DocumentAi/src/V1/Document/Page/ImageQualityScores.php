<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\Page;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Image quality scores for the page image.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.Page.ImageQualityScores</code>
 */
class ImageQualityScores extends \Google\Protobuf\Internal\Message
{
    /**
     * The overall quality score. Range `[0, 1]` where `1` is perfect quality.
     *
     * Generated from protobuf field <code>float quality_score = 1;</code>
     */
    private $quality_score = 0.0;
    /**
     * A list of detected defects.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.ImageQualityScores.DetectedDefect detected_defects = 2;</code>
     */
    private $detected_defects;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $quality_score
     *           The overall quality score. Range `[0, 1]` where `1` is perfect quality.
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\Page\ImageQualityScores\DetectedDefect>|\Google\Protobuf\Internal\RepeatedField $detected_defects
     *           A list of detected defects.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * The overall quality score. Range `[0, 1]` where `1` is perfect quality.
     *
     * Generated from protobuf field <code>float quality_score = 1;</code>
     * @return float
     */
    public function getQualityScore()
    {
        return $this->quality_score;
    }

    /**
     * The overall quality score. Range `[0, 1]` where `1` is perfect quality.
     *
     * Generated from protobuf field <code>float quality_score = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setQualityScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->quality_score = $var;

        return $this;
    }

    /**
     * A list of detected defects.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.ImageQualityScores.DetectedDefect detected_defects = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetectedDefects()
    {
        return $this->detected_defects;
    }

    /**
     * A list of detected defects.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.ImageQualityScores.DetectedDefect detected_defects = 2;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\Page\ImageQualityScores\DetectedDefect>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetectedDefects($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Page\ImageQualityScores\DetectedDefect::class);
        $this->detected_defects = $arr;

        return $this;
    }

}

