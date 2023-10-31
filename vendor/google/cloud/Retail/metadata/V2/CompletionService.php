<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/completion_service.proto

namespace GPBMetadata\Google\Cloud\Retail\V2;

class CompletionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\ImportConfig::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/retail/v2/completion_service.protogoogle.cloud.retail.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/cloud/retail/v2/common.proto*google/cloud/retail/v2/import_config.proto#google/longrunning/operations.proto"�
CompleteQueryRequest6
catalog (	B%�A�A
retail.googleapis.com/Catalog
query (	B�A

visitor_id (	
language_codes (	
device_type (	
dataset (	
max_suggestions (
entity
 (	"�
CompleteQueryResponseZ
completion_results (2>.google.cloud.retail.v2.CompleteQueryResponse.CompletionResult
attribution_token (	_
recent_search_results (2@.google.cloud.retail.v2.CompleteQueryResponse.RecentSearchResult�
CompletionResult

suggestion (	b

attributes (2N.google.cloud.retail.v2.CompleteQueryResponse.CompletionResult.AttributesEntryZ
AttributesEntry
key (	6
value (2\'.google.cloud.retail.v2.CustomAttribute:8+
RecentSearchResult
recent_search (	2�
CompletionService�
CompleteQuery,.google.cloud.retail.v2.CompleteQueryRequest-.google.cloud.retail.v2.CompleteQueryResponse"E���?=/v2/{catalog=projects/*/locations/*/catalogs/*}:completeQuery�
ImportCompletionData3.google.cloud.retail.v2.ImportCompletionDataRequest.google.longrunning.Operation"����I"D/v2/{parent=projects/*/locations/*/catalogs/*}/completionData:import:*�A\\
3google.cloud.retail.v2.ImportCompletionDataResponse%google.cloud.retail.v2.ImportMetadataI�Aretail.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.retail.v2BCompletionServiceProtoPZ2cloud.google.com/go/retail/apiv2/retailpb;retailpb�RETAIL�Google.Cloud.Retail.V2�Google\\Cloud\\Retail\\V2�Google::Cloud::Retail::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

