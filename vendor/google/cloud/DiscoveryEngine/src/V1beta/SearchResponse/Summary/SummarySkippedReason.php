<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary;

use UnexpectedValueException;

/**
 * An Enum for summary-skipped reasons.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1beta.SearchResponse.Summary.SummarySkippedReason</code>
 */
class SummarySkippedReason
{
    /**
     * Default value. The summary skipped reason is not specified.
     *
     * Generated from protobuf enum <code>SUMMARY_SKIPPED_REASON_UNSPECIFIED = 0;</code>
     */
    const SUMMARY_SKIPPED_REASON_UNSPECIFIED = 0;
    /**
     * The adversarial query ignored case.
     * Only populated when
     * [SummarySpec.ignore_adversarial_query][google.cloud.discoveryengine.v1beta.SearchRequest.ContentSearchSpec.SummarySpec.ignore_adversarial_query]
     * is set to `true`.
     *
     * Generated from protobuf enum <code>ADVERSARIAL_QUERY_IGNORED = 1;</code>
     */
    const ADVERSARIAL_QUERY_IGNORED = 1;
    /**
     * The non-summary seeking query ignored case.
     * Only populated when
     * [SummarySpec.ignore_non_summary_seeking_query][google.cloud.discoveryengine.v1beta.SearchRequest.ContentSearchSpec.SummarySpec.ignore_non_summary_seeking_query]
     * is set to `true`.
     *
     * Generated from protobuf enum <code>NON_SUMMARY_SEEKING_QUERY_IGNORED = 2;</code>
     */
    const NON_SUMMARY_SEEKING_QUERY_IGNORED = 2;
    /**
     * The out-of-domain query ignored case.
     * Google skips the summary if there are no high-relevance search results.
     * For example, the data store contains facts about company A but the
     * user query is asking questions about company B.
     *
     * Generated from protobuf enum <code>OUT_OF_DOMAIN_QUERY_IGNORED = 3;</code>
     */
    const OUT_OF_DOMAIN_QUERY_IGNORED = 3;

    private static $valueToName = [
        self::SUMMARY_SKIPPED_REASON_UNSPECIFIED => 'SUMMARY_SKIPPED_REASON_UNSPECIFIED',
        self::ADVERSARIAL_QUERY_IGNORED => 'ADVERSARIAL_QUERY_IGNORED',
        self::NON_SUMMARY_SEEKING_QUERY_IGNORED => 'NON_SUMMARY_SEEKING_QUERY_IGNORED',
        self::OUT_OF_DOMAIN_QUERY_IGNORED => 'OUT_OF_DOMAIN_QUERY_IGNORED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


