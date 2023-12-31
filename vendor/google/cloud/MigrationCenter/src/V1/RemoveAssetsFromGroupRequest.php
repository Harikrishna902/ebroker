<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to remove assets from a group.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.RemoveAssetsFromGroupRequest</code>
 */
class RemoveAssetsFromGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Group reference.
     *
     * Generated from protobuf field <code>string group = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $group = '';
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Required. List of assets to be removed.
     * The maximum number of assets that can be removed in a single request is
     * 1000.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.AssetList assets = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $assets = null;
    /**
     * Optional. When this value is set to `false` and one of the given assets is
     * not an existing member of the group, the operation fails with a `Not Found`
     * error. When set to `true` this situation is silently ignored by the server.
     * Default value is `false`.
     *
     * Generated from protobuf field <code>bool allow_missing = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $allow_missing = false;

    /**
     * @param string $group Required. Group reference. Please see
     *                      {@see MigrationCenterClient::groupName()} for help formatting this field.
     *
     * @return \Google\Cloud\MigrationCenter\V1\RemoveAssetsFromGroupRequest
     *
     * @experimental
     */
    public static function build(string $group): self
    {
        return (new self())
            ->setGroup($group);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $group
     *           Required. Group reference.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes after the first request.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type \Google\Cloud\MigrationCenter\V1\AssetList $assets
     *           Required. List of assets to be removed.
     *           The maximum number of assets that can be removed in a single request is
     *           1000.
     *     @type bool $allow_missing
     *           Optional. When this value is set to `false` and one of the given assets is
     *           not an existing member of the group, the operation fails with a `Not Found`
     *           error. When set to `true` this situation is silently ignored by the server.
     *           Default value is `false`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Group reference.
     *
     * Generated from protobuf field <code>string group = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Required. Group reference.
     *
     * Generated from protobuf field <code>string group = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->group = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Required. List of assets to be removed.
     * The maximum number of assets that can be removed in a single request is
     * 1000.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.AssetList assets = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\MigrationCenter\V1\AssetList|null
     */
    public function getAssets()
    {
        return $this->assets;
    }

    public function hasAssets()
    {
        return isset($this->assets);
    }

    public function clearAssets()
    {
        unset($this->assets);
    }

    /**
     * Required. List of assets to be removed.
     * The maximum number of assets that can be removed in a single request is
     * 1000.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.AssetList assets = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\MigrationCenter\V1\AssetList $var
     * @return $this
     */
    public function setAssets($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\AssetList::class);
        $this->assets = $var;

        return $this;
    }

    /**
     * Optional. When this value is set to `false` and one of the given assets is
     * not an existing member of the group, the operation fails with a `Not Found`
     * error. When set to `true` this situation is silently ignored by the server.
     * Default value is `false`.
     *
     * Generated from protobuf field <code>bool allow_missing = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * Optional. When this value is set to `false` and one of the given assets is
     * not an existing member of the group, the operation fails with a `Not Found`
     * error. When set to `true` this situation is silently ignored by the server.
     * Default value is `false`.
     *
     * Generated from protobuf field <code>bool allow_missing = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

}

