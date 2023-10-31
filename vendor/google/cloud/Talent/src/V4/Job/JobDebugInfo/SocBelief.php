<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/job.proto

namespace Google\Cloud\Talent\V4\Job\JobDebugInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A belief that a job has particular soc with some probability.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.Job.JobDebugInfo.SocBelief</code>
 */
class SocBelief extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string soc_code = 1;</code>
     */
    private $soc_code = '';
    /**
     * Generated from protobuf field <code>double probability = 2;</code>
     */
    private $probability = 0.0;
    /**
     * Generated from protobuf field <code>int32 svp = 3;</code>
     */
    private $svp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $soc_code
     *     @type float $probability
     *     @type int $svp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string soc_code = 1;</code>
     * @return string
     */
    public function getSocCode()
    {
        return $this->soc_code;
    }

    /**
     * Generated from protobuf field <code>string soc_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSocCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->soc_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double probability = 2;</code>
     * @return float
     */
    public function getProbability()
    {
        return $this->probability;
    }

    /**
     * Generated from protobuf field <code>double probability = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setProbability($var)
    {
        GPBUtil::checkDouble($var);
        $this->probability = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 svp = 3;</code>
     * @return int
     */
    public function getSvp()
    {
        return $this->svp;
    }

    /**
     * Generated from protobuf field <code>int32 svp = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSvp($var)
    {
        GPBUtil::checkInt32($var);
        $this->svp = $var;

        return $this;
    }

}

