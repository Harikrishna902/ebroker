<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for RegionUrlMaps.Patch. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PatchRegionUrlMapRequest</code>
 */
class PatchRegionUrlMapRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     */
    private $region = '';
    /**
     * begin_interface: MixerMutationRequestBuilder Request ID to support idempotency.
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     */
    private $request_id = null;
    /**
     * Name of the UrlMap resource to patch.
     *
     * Generated from protobuf field <code>string url_map = 367020684 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $url_map = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.UrlMap url_map_resource = 168675425 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $url_map_resource = null;

    /**
     * @param string                          $project        Project ID for this request.
     * @param string                          $region         Name of the region scoping this request.
     * @param string                          $urlMap         Name of the UrlMap resource to patch.
     * @param \Google\Cloud\Compute\V1\UrlMap $urlMapResource The body resource for this request
     *
     * @return \Google\Cloud\Compute\V1\PatchRegionUrlMapRequest
     *
     * @experimental
     */
    public static function build(string $project, string $region, string $urlMap, \Google\Cloud\Compute\V1\UrlMap $urlMapResource): self
    {
        return (new self())
            ->setProject($project)
            ->setRegion($region)
            ->setUrlMap($urlMap)
            ->setUrlMapResource($urlMapResource);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           Name of the region scoping this request.
     *     @type string $request_id
     *           begin_interface: MixerMutationRequestBuilder Request ID to support idempotency.
     *     @type string $url_map
     *           Name of the UrlMap resource to patch.
     *     @type \Google\Cloud\Compute\V1\UrlMap $url_map_resource
     *           The body resource for this request
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * begin_interface: MixerMutationRequestBuilder Request ID to support idempotency.
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * begin_interface: MixerMutationRequestBuilder Request ID to support idempotency.
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Name of the UrlMap resource to patch.
     *
     * Generated from protobuf field <code>string url_map = 367020684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUrlMap()
    {
        return $this->url_map;
    }

    /**
     * Name of the UrlMap resource to patch.
     *
     * Generated from protobuf field <code>string url_map = 367020684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUrlMap($var)
    {
        GPBUtil::checkString($var, True);
        $this->url_map = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.UrlMap url_map_resource = 168675425 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\UrlMap|null
     */
    public function getUrlMapResource()
    {
        return $this->url_map_resource;
    }

    public function hasUrlMapResource()
    {
        return isset($this->url_map_resource);
    }

    public function clearUrlMapResource()
    {
        unset($this->url_map_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.UrlMap url_map_resource = 168675425 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\UrlMap $var
     * @return $this
     */
    public function setUrlMapResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\UrlMap::class);
        $this->url_map_resource = $var;

        return $this;
    }

}

