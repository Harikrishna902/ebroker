<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to create a preference set.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.CreatePreferenceSetRequest</code>
 */
class CreatePreferenceSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Value for parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. User specified ID for the preference set. It will become the last
     * component of the preference set name. The ID must be unique within the
     * project, must conform with RFC-1034, is restricted to lower-cased letters,
     * and has a maximum length of 63 characters. The ID must match the regular
     * expression
     * `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *
     * Generated from protobuf field <code>string preference_set_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $preference_set_id = '';
    /**
     * Required. The preference set resource being created.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.PreferenceSet preference_set = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $preference_set = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * @param string                                         $parent          Required. Value for parent. Please see
     *                                                                        {@see MigrationCenterClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\MigrationCenter\V1\PreferenceSet $preferenceSet   Required. The preference set resource being created.
     * @param string                                         $preferenceSetId Required. User specified ID for the preference set. It will become the last
     *                                                                        component of the preference set name. The ID must be unique within the
     *                                                                        project, must conform with RFC-1034, is restricted to lower-cased letters,
     *                                                                        and has a maximum length of 63 characters. The ID must match the regular
     *                                                                        expression
     *                                                                        `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *
     * @return \Google\Cloud\MigrationCenter\V1\CreatePreferenceSetRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\MigrationCenter\V1\PreferenceSet $preferenceSet, string $preferenceSetId): self
    {
        return (new self())
            ->setParent($parent)
            ->setPreferenceSet($preferenceSet)
            ->setPreferenceSetId($preferenceSetId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Value for parent.
     *     @type string $preference_set_id
     *           Required. User specified ID for the preference set. It will become the last
     *           component of the preference set name. The ID must be unique within the
     *           project, must conform with RFC-1034, is restricted to lower-cased letters,
     *           and has a maximum length of 63 characters. The ID must match the regular
     *           expression
     *           `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *     @type \Google\Cloud\MigrationCenter\V1\PreferenceSet $preference_set
     *           Required. The preference set resource being created.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Value for parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Value for parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. User specified ID for the preference set. It will become the last
     * component of the preference set name. The ID must be unique within the
     * project, must conform with RFC-1034, is restricted to lower-cased letters,
     * and has a maximum length of 63 characters. The ID must match the regular
     * expression
     * `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *
     * Generated from protobuf field <code>string preference_set_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPreferenceSetId()
    {
        return $this->preference_set_id;
    }

    /**
     * Required. User specified ID for the preference set. It will become the last
     * component of the preference set name. The ID must be unique within the
     * project, must conform with RFC-1034, is restricted to lower-cased letters,
     * and has a maximum length of 63 characters. The ID must match the regular
     * expression
     * `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *
     * Generated from protobuf field <code>string preference_set_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPreferenceSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->preference_set_id = $var;

        return $this;
    }

    /**
     * Required. The preference set resource being created.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.PreferenceSet preference_set = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\MigrationCenter\V1\PreferenceSet|null
     */
    public function getPreferenceSet()
    {
        return $this->preference_set;
    }

    public function hasPreferenceSet()
    {
        return isset($this->preference_set);
    }

    public function clearPreferenceSet()
    {
        unset($this->preference_set);
    }

    /**
     * Required. The preference set resource being created.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.PreferenceSet preference_set = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\MigrationCenter\V1\PreferenceSet $var
     * @return $this
     */
    public function setPreferenceSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\PreferenceSet::class);
        $this->preference_set = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

