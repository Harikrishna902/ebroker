<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_available_database_versions.proto

namespace GPBMetadata\Google\Cloud\Sql\V1;

class CloudSqlAvailableDatabaseVersions
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
        $pool->internalAddGeneratedFile(
            '
�
?google/cloud/sql/v1/cloud_sql_available_database_versions.protogoogle.cloud.sql.v1google/api/client.protogoogle/api/field_behavior.proto2A
#SqlAvailableDatabaseVersionsService�Asqladmin.googleapis.comBn
com.google.cloud.sql.v1B&CloudSqlAvailableDatabaseVersionsProtoPZ)cloud.google.com/go/sql/apiv1/sqlpb;sqlpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

