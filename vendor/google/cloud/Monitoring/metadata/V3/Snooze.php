<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/snooze.proto

namespace GPBMetadata\Google\Monitoring\V3;

class Snooze
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Monitoring\V3\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
!google/monitoring/v3/snooze.protogoogle.monitoring.v3google/api/resource.proto!google/monitoring/v3/common.proto"�
Snooze
name (	B�A<
criteria (2%.google.monitoring.v3.Snooze.CriteriaB�A9
interval (2".google.monitoring.v3.TimeIntervalB�A
display_name (	B�AH
Criteria<
policies (	B*�A\'
%monitoring.googleapis.com/AlertPolicy:J�AG
 monitoring.googleapis.com/Snooze#projects/{project}/snoozes/{snooze}B�
com.google.monitoring.v3BSnoozeProtoPZAcloud.google.com/go/monitoring/apiv3/v2/monitoringpb;monitoringpb�Google.Cloud.Monitoring.V3�Google\\Cloud\\Monitoring\\V3�Google::Cloud::Monitoring::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}
