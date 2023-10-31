<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1beta/resources.proto

namespace Google\Cloud\AlloyDb\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The username/password for a database user. Used for specifying initial
 * users at cluster creation time.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1beta.UserPassword</code>
 */
class UserPassword extends \Google\Protobuf\Internal\Message
{
    /**
     * The database username.
     *
     * Generated from protobuf field <code>string user = 1;</code>
     */
    protected $user = '';
    /**
     * The initial password for the user.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     */
    protected $password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user
     *           The database username.
     *     @type string $password
     *           The initial password for the user.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Beta\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The database username.
     *
     * Generated from protobuf field <code>string user = 1;</code>
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * The database username.
     *
     * Generated from protobuf field <code>string user = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkString($var, True);
        $this->user = $var;

        return $this;
    }

    /**
     * The initial password for the user.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * The initial password for the user.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

}

