<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/yum_artifact.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message from importing YUM artifacts.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.ImportYumArtifactsResponse</code>
 */
class ImportYumArtifactsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The yum artifacts imported.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1.YumArtifact yum_artifacts = 1;</code>
     */
    private $yum_artifacts;
    /**
     * Detailed error info for packages that were not imported.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1.ImportYumArtifactsErrorInfo errors = 2;</code>
     */
    private $errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ArtifactRegistry\V1\YumArtifact>|\Google\Protobuf\Internal\RepeatedField $yum_artifacts
     *           The yum artifacts imported.
     *     @type array<\Google\Cloud\ArtifactRegistry\V1\ImportYumArtifactsErrorInfo>|\Google\Protobuf\Internal\RepeatedField $errors
     *           Detailed error info for packages that were not imported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\YumArtifact::initOnce();
        parent::__construct($data);
    }

    /**
     * The yum artifacts imported.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1.YumArtifact yum_artifacts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getYumArtifacts()
    {
        return $this->yum_artifacts;
    }

    /**
     * The yum artifacts imported.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1.YumArtifact yum_artifacts = 1;</code>
     * @param array<\Google\Cloud\ArtifactRegistry\V1\YumArtifact>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setYumArtifacts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ArtifactRegistry\V1\YumArtifact::class);
        $this->yum_artifacts = $arr;

        return $this;
    }

    /**
     * Detailed error info for packages that were not imported.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1.ImportYumArtifactsErrorInfo errors = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Detailed error info for packages that were not imported.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1.ImportYumArtifactsErrorInfo errors = 2;</code>
     * @param array<\Google\Cloud\ArtifactRegistry\V1\ImportYumArtifactsErrorInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ArtifactRegistry\V1\ImportYumArtifactsErrorInfo::class);
        $this->errors = $arr;

        return $this;
    }

}

