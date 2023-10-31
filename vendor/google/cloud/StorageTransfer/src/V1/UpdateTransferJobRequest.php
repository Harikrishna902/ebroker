<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request passed to UpdateTransferJob.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.UpdateTransferJobRequest</code>
 */
class UpdateTransferJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of job to update.
     *
     * Generated from protobuf field <code>string job_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $job_name = '';
    /**
     * Required. The ID of the Google Cloud project that owns the
     * job.
     *
     * Generated from protobuf field <code>string project_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project_id = '';
    /**
     * Required. The job to update. `transferJob` is expected to specify one or
     * more of five fields:
     * [description][google.storagetransfer.v1.TransferJob.description],
     * [transfer_spec][google.storagetransfer.v1.TransferJob.transfer_spec],
     * [notification_config][google.storagetransfer.v1.TransferJob.notification_config],
     * [logging_config][google.storagetransfer.v1.TransferJob.logging_config], and
     * [status][google.storagetransfer.v1.TransferJob.status].  An
     * `UpdateTransferJobRequest` that specifies other fields are rejected with
     * the error [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]. Updating a
     * job status to
     * [DELETED][google.storagetransfer.v1.TransferJob.Status.DELETED] requires
     * `storagetransfer.jobs.delete` permission.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferJob transfer_job = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $transfer_job = null;
    /**
     * The field mask of the fields in `transferJob` that are to be updated in
     * this request.  Fields in `transferJob` that can be updated are:
     * [description][google.storagetransfer.v1.TransferJob.description],
     * [transfer_spec][google.storagetransfer.v1.TransferJob.transfer_spec],
     * [notification_config][google.storagetransfer.v1.TransferJob.notification_config],
     * [logging_config][google.storagetransfer.v1.TransferJob.logging_config], and
     * [status][google.storagetransfer.v1.TransferJob.status].  To update the
     * `transfer_spec` of the job, a complete transfer specification must be
     * provided. An incomplete specification missing any required fields is
     * rejected with the error
     * [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_transfer_job_field_mask = 4;</code>
     */
    private $update_transfer_job_field_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $job_name
     *           Required. The name of job to update.
     *     @type string $project_id
     *           Required. The ID of the Google Cloud project that owns the
     *           job.
     *     @type \Google\Cloud\StorageTransfer\V1\TransferJob $transfer_job
     *           Required. The job to update. `transferJob` is expected to specify one or
     *           more of five fields:
     *           [description][google.storagetransfer.v1.TransferJob.description],
     *           [transfer_spec][google.storagetransfer.v1.TransferJob.transfer_spec],
     *           [notification_config][google.storagetransfer.v1.TransferJob.notification_config],
     *           [logging_config][google.storagetransfer.v1.TransferJob.logging_config], and
     *           [status][google.storagetransfer.v1.TransferJob.status].  An
     *           `UpdateTransferJobRequest` that specifies other fields are rejected with
     *           the error [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]. Updating a
     *           job status to
     *           [DELETED][google.storagetransfer.v1.TransferJob.Status.DELETED] requires
     *           `storagetransfer.jobs.delete` permission.
     *     @type \Google\Protobuf\FieldMask $update_transfer_job_field_mask
     *           The field mask of the fields in `transferJob` that are to be updated in
     *           this request.  Fields in `transferJob` that can be updated are:
     *           [description][google.storagetransfer.v1.TransferJob.description],
     *           [transfer_spec][google.storagetransfer.v1.TransferJob.transfer_spec],
     *           [notification_config][google.storagetransfer.v1.TransferJob.notification_config],
     *           [logging_config][google.storagetransfer.v1.TransferJob.logging_config], and
     *           [status][google.storagetransfer.v1.TransferJob.status].  To update the
     *           `transfer_spec` of the job, a complete transfer specification must be
     *           provided. An incomplete specification missing any required fields is
     *           rejected with the error
     *           [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\Transfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of job to update.
     *
     * Generated from protobuf field <code>string job_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getJobName()
    {
        return $this->job_name;
    }

    /**
     * Required. The name of job to update.
     *
     * Generated from protobuf field <code>string job_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setJobName($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_name = $var;

        return $this;
    }

    /**
     * Required. The ID of the Google Cloud project that owns the
     * job.
     *
     * Generated from protobuf field <code>string project_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. The ID of the Google Cloud project that owns the
     * job.
     *
     * Generated from protobuf field <code>string project_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. The job to update. `transferJob` is expected to specify one or
     * more of five fields:
     * [description][google.storagetransfer.v1.TransferJob.description],
     * [transfer_spec][google.storagetransfer.v1.TransferJob.transfer_spec],
     * [notification_config][google.storagetransfer.v1.TransferJob.notification_config],
     * [logging_config][google.storagetransfer.v1.TransferJob.logging_config], and
     * [status][google.storagetransfer.v1.TransferJob.status].  An
     * `UpdateTransferJobRequest` that specifies other fields are rejected with
     * the error [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]. Updating a
     * job status to
     * [DELETED][google.storagetransfer.v1.TransferJob.Status.DELETED] requires
     * `storagetransfer.jobs.delete` permission.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferJob transfer_job = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\StorageTransfer\V1\TransferJob|null
     */
    public function getTransferJob()
    {
        return $this->transfer_job;
    }

    public function hasTransferJob()
    {
        return isset($this->transfer_job);
    }

    public function clearTransferJob()
    {
        unset($this->transfer_job);
    }

    /**
     * Required. The job to update. `transferJob` is expected to specify one or
     * more of five fields:
     * [description][google.storagetransfer.v1.TransferJob.description],
     * [transfer_spec][google.storagetransfer.v1.TransferJob.transfer_spec],
     * [notification_config][google.storagetransfer.v1.TransferJob.notification_config],
     * [logging_config][google.storagetransfer.v1.TransferJob.logging_config], and
     * [status][google.storagetransfer.v1.TransferJob.status].  An
     * `UpdateTransferJobRequest` that specifies other fields are rejected with
     * the error [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]. Updating a
     * job status to
     * [DELETED][google.storagetransfer.v1.TransferJob.Status.DELETED] requires
     * `storagetransfer.jobs.delete` permission.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferJob transfer_job = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\StorageTransfer\V1\TransferJob $var
     * @return $this
     */
    public function setTransferJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\TransferJob::class);
        $this->transfer_job = $var;

        return $this;
    }

    /**
     * The field mask of the fields in `transferJob` that are to be updated in
     * this request.  Fields in `transferJob` that can be updated are:
     * [description][google.storagetransfer.v1.TransferJob.description],
     * [transfer_spec][google.storagetransfer.v1.TransferJob.transfer_spec],
     * [notification_config][google.storagetransfer.v1.TransferJob.notification_config],
     * [logging_config][google.storagetransfer.v1.TransferJob.logging_config], and
     * [status][google.storagetransfer.v1.TransferJob.status].  To update the
     * `transfer_spec` of the job, a complete transfer specification must be
     * provided. An incomplete specification missing any required fields is
     * rejected with the error
     * [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_transfer_job_field_mask = 4;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateTransferJobFieldMask()
    {
        return $this->update_transfer_job_field_mask;
    }

    public function hasUpdateTransferJobFieldMask()
    {
        return isset($this->update_transfer_job_field_mask);
    }

    public function clearUpdateTransferJobFieldMask()
    {
        unset($this->update_transfer_job_field_mask);
    }

    /**
     * The field mask of the fields in `transferJob` that are to be updated in
     * this request.  Fields in `transferJob` that can be updated are:
     * [description][google.storagetransfer.v1.TransferJob.description],
     * [transfer_spec][google.storagetransfer.v1.TransferJob.transfer_spec],
     * [notification_config][google.storagetransfer.v1.TransferJob.notification_config],
     * [logging_config][google.storagetransfer.v1.TransferJob.logging_config], and
     * [status][google.storagetransfer.v1.TransferJob.status].  To update the
     * `transfer_spec` of the job, a complete transfer specification must be
     * provided. An incomplete specification missing any required fields is
     * rejected with the error
     * [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_transfer_job_field_mask = 4;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateTransferJobFieldMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_transfer_job_field_mask = $var;

        return $this;
    }

}

