<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum ResourceTaggingTypeItem: string
{
	case AccessApplication = 'access_application';
	case AccessApplicationPolicy = 'access_application_policy';
	case AccessGroup = 'access_group';
	case Account = 'account';
	case AiGateway = 'ai_gateway';
	case AlertingPolicy = 'alerting_policy';
	case AlertingWebhook = 'alerting_webhook';
	case ApiGatewayOperation = 'api_gateway_operation';
	case CloudflaredTunnel = 'cloudflared_tunnel';
	case CustomCertificate = 'custom_certificate';
	case CustomHostname = 'custom_hostname';
	case D1Database = 'd1_database';
	case DnsRecord = 'dns_record';
	case DurableObjectNamespace = 'durable_object_namespace';
	case GatewayList = 'gateway_list';
	case GatewayRule = 'gateway_rule';
	case Image = 'image';
	case KvNamespace = 'kv_namespace';
	case ManagedClientCertificate = 'managed_client_certificate';
	case Queue = 'queue';
	case R2Bucket = 'r2_bucket';
	case ResourceShare = 'resource_share';
	case StreamLiveInput = 'stream_live_input';
	case StreamVideo = 'stream_video';
	case Worker = 'worker';
	case WorkerVersion = 'worker_version';
	case Zone = 'zone';
}
