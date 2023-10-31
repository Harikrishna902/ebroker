<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/analyticshub/v1/analyticshub.proto

namespace Google\Cloud\BigQuery\AnalyticsHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for requesting the list of data exchanges from projects in an
 * organization and location.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.analyticshub.v1.ListOrgDataExchangesRequest</code>
 */
class ListOrgDataExchangesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The organization resource path of the projects containing DataExchanges.
     * e.g. `organizations/myorg/locations/US`.
     *
     * Generated from protobuf field <code>string organization = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $organization = '';
    /**
     * The maximum number of results to return in a single response page. Leverage
     * the page tokens to iterate through the entire collection.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * Page token, returned by a previous call, to request the next page of
     * results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * @param string $organization Required. The organization resource path of the projects containing DataExchanges.
     *                             e.g. `organizations/myorg/locations/US`.
     *
     * @return \Google\Cloud\BigQuery\AnalyticsHub\V1\ListOrgDataExchangesRequest
     *
     * @experimental
     */
    public static function build(string $organization): self
    {
        return (new self())
            ->setOrganization($organization);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $organization
     *           Required. The organization resource path of the projects containing DataExchanges.
     *           e.g. `organizations/myorg/locations/US`.
     *     @type int $page_size
     *           The maximum number of results to return in a single response page. Leverage
     *           the page tokens to iterate through the entire collection.
     *     @type string $page_token
     *           Page token, returned by a previous call, to request the next page of
     *           results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Analyticshub\V1\Analyticshub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The organization resource path of the projects containing DataExchanges.
     * e.g. `organizations/myorg/locations/US`.
     *
     * Generated from protobuf field <code>string organization = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Required. The organization resource path of the projects containing DataExchanges.
     * e.g. `organizations/myorg/locations/US`.
     *
     * Generated from protobuf field <code>string organization = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setOrganization($var)
    {
        GPBUtil::checkString($var, True);
        $this->organization = $var;

        return $this;
    }

    /**
     * The maximum number of results to return in a single response page. Leverage
     * the page tokens to iterate through the entire collection.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of results to return in a single response page. Leverage
     * the page tokens to iterate through the entire collection.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Page token, returned by a previous call, to request the next page of
     * results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Page token, returned by a previous call, to request the next page of
     * results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

