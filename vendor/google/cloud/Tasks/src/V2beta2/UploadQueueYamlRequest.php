<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/cloudtasks.proto

namespace Google\Cloud\Tasks\V2beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [UploadQueueYaml][google.cloud.tasks.v2beta2.CloudTasks.UploadQueueYaml].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta2.UploadQueueYamlRequest</code>
 */
class UploadQueueYamlRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The App ID is supplied as an HTTP parameter. Unlike internal
     * usage of App ID, it does not include a region prefix. Rather, the App ID
     * represents the Project ID against which to make the request.
     *
     * Generated from protobuf field <code>string app_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $app_id = '';
    /**
     * The http body contains the queue.yaml file which used to update queue lists
     *
     * Generated from protobuf field <code>optional .google.api.HttpBody http_body = 2;</code>
     */
    private $http_body = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $app_id
     *           Required. The App ID is supplied as an HTTP parameter. Unlike internal
     *           usage of App ID, it does not include a region prefix. Rather, the App ID
     *           represents the Project ID against which to make the request.
     *     @type \Google\Api\HttpBody $http_body
     *           The http body contains the queue.yaml file which used to update queue lists
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta2\Cloudtasks::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The App ID is supplied as an HTTP parameter. Unlike internal
     * usage of App ID, it does not include a region prefix. Rather, the App ID
     * represents the Project ID against which to make the request.
     *
     * Generated from protobuf field <code>string app_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Required. The App ID is supplied as an HTTP parameter. Unlike internal
     * usage of App ID, it does not include a region prefix. Rather, the App ID
     * represents the Project ID against which to make the request.
     *
     * Generated from protobuf field <code>string app_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * The http body contains the queue.yaml file which used to update queue lists
     *
     * Generated from protobuf field <code>optional .google.api.HttpBody http_body = 2;</code>
     * @return \Google\Api\HttpBody|null
     */
    public function getHttpBody()
    {
        return $this->http_body;
    }

    public function hasHttpBody()
    {
        return isset($this->http_body);
    }

    public function clearHttpBody()
    {
        unset($this->http_body);
    }

    /**
     * The http body contains the queue.yaml file which used to update queue lists
     *
     * Generated from protobuf field <code>optional .google.api.HttpBody http_body = 2;</code>
     * @param \Google\Api\HttpBody $var
     * @return $this
     */
    public function setHttpBody($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\HttpBody::class);
        $this->http_body = $var;

        return $this;
    }

}

