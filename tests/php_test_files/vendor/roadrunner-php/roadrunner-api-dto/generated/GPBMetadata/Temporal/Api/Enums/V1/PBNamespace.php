<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/enums/v1/namespace.proto

namespace GPBMetadata\Temporal\Api\Enums\V1;

class PBNamespace
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\xBF\x04\x0A%temporal/api/enums/v1/namespace.proto\x12\x15temporal.api.enums.v1*\x8E\x01\x0A\x0ENamespaceState\x12\x1F\x0A\x1BNAMESPACE_STATE_UNSPECIFIED\x10\x00\x12\x1E\x0A\x1ANAMESPACE_STATE_REGISTERED\x10\x01\x12\x1E\x0A\x1ANAMESPACE_STATE_DEPRECATED\x10\x02\x12\x1B\x0A\x17NAMESPACE_STATE_DELETED\x10\x03*h\x0A\x0DArchivalState\x12\x1E\x0A\x1AARCHIVAL_STATE_UNSPECIFIED\x10\x00\x12\x1B\x0A\x17ARCHIVAL_STATE_DISABLED\x10\x01\x12\x1A\x0A\x16ARCHIVAL_STATE_ENABLED\x10\x02*s\x0A\x10ReplicationState\x12!\x0A\x1DREPLICATION_STATE_UNSPECIFIED\x10\x00\x12\x1C\x0A\x18REPLICATION_STATE_NORMAL\x10\x01\x12\x1E\x0A\x1AREPLICATION_STATE_HANDOVER\x10\x02B\x86\x01\x0A\x18io.temporal.api.enums.v1B\x0ENamespaceProtoP\x01Z!go.temporal.io/api/enums/v1;enums\xAA\x02\x17Temporalio.Api.Enums.V1\xEA\x02\x1ATemporalio::Api::Enums::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

