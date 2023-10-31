<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/logs.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * These messages contain information about the execution of a datascan.
 * The monitored resource is 'DataScan'
 * Next ID: 13
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataScanEvent</code>
 */
class DataScanEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * The data source of the data scan
     *
     * Generated from protobuf field <code>string data_source = 1;</code>
     */
    private $data_source = '';
    /**
     * The identifier of the specific data scan job this log entry is for.
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     */
    private $job_id = '';
    /**
     * The time when the data scan job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 12;</code>
     */
    private $create_time = null;
    /**
     * The time when the data scan job started to run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3;</code>
     */
    private $start_time = null;
    /**
     * The time when the data scan job finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     */
    private $end_time = null;
    /**
     * The type of the data scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.ScanType type = 5;</code>
     */
    private $type = 0;
    /**
     * The status of the data scan job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.State state = 6;</code>
     */
    private $state = 0;
    /**
     * The message describing the data scan job event.
     *
     * Generated from protobuf field <code>string message = 7;</code>
     */
    private $message = '';
    /**
     * A version identifier of the spec which was used to execute this job.
     *
     * Generated from protobuf field <code>string spec_version = 8;</code>
     */
    private $spec_version = '';
    /**
     * The trigger type of the data scan job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.Trigger trigger = 9;</code>
     */
    private $trigger = 0;
    /**
     * The scope of the data scan (e.g. full, incremental).
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.Scope scope = 10;</code>
     */
    private $scope = 0;
    /**
     * The result of post scan actions.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.PostScanActionsResult post_scan_actions_result = 11;</code>
     */
    private $post_scan_actions_result = null;
    protected $result;
    protected $appliedConfigs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data_source
     *           The data source of the data scan
     *     @type string $job_id
     *           The identifier of the specific data scan job this log entry is for.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time when the data scan job was created.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The time when the data scan job started to run.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The time when the data scan job finished.
     *     @type int $type
     *           The type of the data scan.
     *     @type int $state
     *           The status of the data scan job.
     *     @type string $message
     *           The message describing the data scan job event.
     *     @type string $spec_version
     *           A version identifier of the spec which was used to execute this job.
     *     @type int $trigger
     *           The trigger type of the data scan job.
     *     @type int $scope
     *           The scope of the data scan (e.g. full, incremental).
     *     @type \Google\Cloud\Dataplex\V1\DataScanEvent\DataProfileResult $data_profile
     *           Data profile result for data profile type data scan.
     *     @type \Google\Cloud\Dataplex\V1\DataScanEvent\DataQualityResult $data_quality
     *           Data quality result for data quality type data scan.
     *     @type \Google\Cloud\Dataplex\V1\DataScanEvent\DataProfileAppliedConfigs $data_profile_configs
     *           Applied configs for data profile type data scan.
     *     @type \Google\Cloud\Dataplex\V1\DataScanEvent\DataQualityAppliedConfigs $data_quality_configs
     *           Applied configs for data quality type data scan.
     *     @type \Google\Cloud\Dataplex\V1\DataScanEvent\PostScanActionsResult $post_scan_actions_result
     *           The result of post scan actions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Logs::initOnce();
        parent::__construct($data);
    }

    /**
     * The data source of the data scan
     *
     * Generated from protobuf field <code>string data_source = 1;</code>
     * @return string
     */
    public function getDataSource()
    {
        return $this->data_source;
    }

    /**
     * The data source of the data scan
     *
     * Generated from protobuf field <code>string data_source = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDataSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_source = $var;

        return $this;
    }

    /**
     * The identifier of the specific data scan job this log entry is for.
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * The identifier of the specific data scan job this log entry is for.
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;

        return $this;
    }

    /**
     * The time when the data scan job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 12;</code>
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
     * The time when the data scan job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 12;</code>
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
     * The time when the data scan job started to run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * The time when the data scan job started to run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * The time when the data scan job finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The time when the data scan job finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * The type of the data scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.ScanType type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the data scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.ScanType type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\DataScanEvent\ScanType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The status of the data scan job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.State state = 6;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The status of the data scan job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.State state = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\DataScanEvent\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The message describing the data scan job event.
     *
     * Generated from protobuf field <code>string message = 7;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * The message describing the data scan job event.
     *
     * Generated from protobuf field <code>string message = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * A version identifier of the spec which was used to execute this job.
     *
     * Generated from protobuf field <code>string spec_version = 8;</code>
     * @return string
     */
    public function getSpecVersion()
    {
        return $this->spec_version;
    }

    /**
     * A version identifier of the spec which was used to execute this job.
     *
     * Generated from protobuf field <code>string spec_version = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSpecVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->spec_version = $var;

        return $this;
    }

    /**
     * The trigger type of the data scan job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.Trigger trigger = 9;</code>
     * @return int
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    /**
     * The trigger type of the data scan job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.Trigger trigger = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setTrigger($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\DataScanEvent\Trigger::class);
        $this->trigger = $var;

        return $this;
    }

    /**
     * The scope of the data scan (e.g. full, incremental).
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.Scope scope = 10;</code>
     * @return int
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * The scope of the data scan (e.g. full, incremental).
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.Scope scope = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\DataScanEvent\Scope::class);
        $this->scope = $var;

        return $this;
    }

    /**
     * Data profile result for data profile type data scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.DataProfileResult data_profile = 101;</code>
     * @return \Google\Cloud\Dataplex\V1\DataScanEvent\DataProfileResult|null
     */
    public function getDataProfile()
    {
        return $this->readOneof(101);
    }

    public function hasDataProfile()
    {
        return $this->hasOneof(101);
    }

    /**
     * Data profile result for data profile type data scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.DataProfileResult data_profile = 101;</code>
     * @param \Google\Cloud\Dataplex\V1\DataScanEvent\DataProfileResult $var
     * @return $this
     */
    public function setDataProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataScanEvent\DataProfileResult::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * Data quality result for data quality type data scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.DataQualityResult data_quality = 102;</code>
     * @return \Google\Cloud\Dataplex\V1\DataScanEvent\DataQualityResult|null
     */
    public function getDataQuality()
    {
        return $this->readOneof(102);
    }

    public function hasDataQuality()
    {
        return $this->hasOneof(102);
    }

    /**
     * Data quality result for data quality type data scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.DataQualityResult data_quality = 102;</code>
     * @param \Google\Cloud\Dataplex\V1\DataScanEvent\DataQualityResult $var
     * @return $this
     */
    public function setDataQuality($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataScanEvent\DataQualityResult::class);
        $this->writeOneof(102, $var);

        return $this;
    }

    /**
     * Applied configs for data profile type data scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.DataProfileAppliedConfigs data_profile_configs = 201;</code>
     * @return \Google\Cloud\Dataplex\V1\DataScanEvent\DataProfileAppliedConfigs|null
     */
    public function getDataProfileConfigs()
    {
        return $this->readOneof(201);
    }

    public function hasDataProfileConfigs()
    {
        return $this->hasOneof(201);
    }

    /**
     * Applied configs for data profile type data scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.DataProfileAppliedConfigs data_profile_configs = 201;</code>
     * @param \Google\Cloud\Dataplex\V1\DataScanEvent\DataProfileAppliedConfigs $var
     * @return $this
     */
    public function setDataProfileConfigs($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataScanEvent\DataProfileAppliedConfigs::class);
        $this->writeOneof(201, $var);

        return $this;
    }

    /**
     * Applied configs for data quality type data scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.DataQualityAppliedConfigs data_quality_configs = 202;</code>
     * @return \Google\Cloud\Dataplex\V1\DataScanEvent\DataQualityAppliedConfigs|null
     */
    public function getDataQualityConfigs()
    {
        return $this->readOneof(202);
    }

    public function hasDataQualityConfigs()
    {
        return $this->hasOneof(202);
    }

    /**
     * Applied configs for data quality type data scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.DataQualityAppliedConfigs data_quality_configs = 202;</code>
     * @param \Google\Cloud\Dataplex\V1\DataScanEvent\DataQualityAppliedConfigs $var
     * @return $this
     */
    public function setDataQualityConfigs($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataScanEvent\DataQualityAppliedConfigs::class);
        $this->writeOneof(202, $var);

        return $this;
    }

    /**
     * The result of post scan actions.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.PostScanActionsResult post_scan_actions_result = 11;</code>
     * @return \Google\Cloud\Dataplex\V1\DataScanEvent\PostScanActionsResult|null
     */
    public function getPostScanActionsResult()
    {
        return $this->post_scan_actions_result;
    }

    public function hasPostScanActionsResult()
    {
        return isset($this->post_scan_actions_result);
    }

    public function clearPostScanActionsResult()
    {
        unset($this->post_scan_actions_result);
    }

    /**
     * The result of post scan actions.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanEvent.PostScanActionsResult post_scan_actions_result = 11;</code>
     * @param \Google\Cloud\Dataplex\V1\DataScanEvent\PostScanActionsResult $var
     * @return $this
     */
    public function setPostScanActionsResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataScanEvent\PostScanActionsResult::class);
        $this->post_scan_actions_result = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

    /**
     * @return string
     */
    public function getAppliedConfigs()
    {
        return $this->whichOneof("appliedConfigs");
    }

}

