<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [ConversationalSearchService.ConverseConversation][google.cloud.discoveryengine.v1beta.ConversationalSearchService.ConverseConversation]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.ConverseConversationResponse</code>
 */
class ConverseConversationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Answer to the current query.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Reply reply = 1;</code>
     */
    protected $reply = null;
    /**
     * Updated conversation including the answer.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Conversation conversation = 2;</code>
     */
    protected $conversation = null;
    /**
     * Search Results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.SearchResult search_results = 3;</code>
     */
    private $search_results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\Reply $reply
     *           Answer to the current query.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\Conversation $conversation
     *           Updated conversation including the answer.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\SearchResult>|\Google\Protobuf\Internal\RepeatedField $search_results
     *           Search Results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Answer to the current query.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Reply reply = 1;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\Reply|null
     */
    public function getReply()
    {
        return $this->reply;
    }

    public function hasReply()
    {
        return isset($this->reply);
    }

    public function clearReply()
    {
        unset($this->reply);
    }

    /**
     * Answer to the current query.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Reply reply = 1;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Reply $var
     * @return $this
     */
    public function setReply($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\Reply::class);
        $this->reply = $var;

        return $this;
    }

    /**
     * Updated conversation including the answer.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Conversation conversation = 2;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\Conversation|null
     */
    public function getConversation()
    {
        return $this->conversation;
    }

    public function hasConversation()
    {
        return isset($this->conversation);
    }

    public function clearConversation()
    {
        unset($this->conversation);
    }

    /**
     * Updated conversation including the answer.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Conversation conversation = 2;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Conversation $var
     * @return $this
     */
    public function setConversation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\Conversation::class);
        $this->conversation = $var;

        return $this;
    }

    /**
     * Search Results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.SearchResult search_results = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSearchResults()
    {
        return $this->search_results;
    }

    /**
     * Search Results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.SearchResult search_results = 3;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\SearchResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSearchResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\SearchResult::class);
        $this->search_results = $arr;

        return $this;
    }

}

