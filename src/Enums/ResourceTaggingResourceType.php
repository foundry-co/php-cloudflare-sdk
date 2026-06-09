<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum ResourceTaggingResourceType: string
{
	case AccessApplication = 'access_application';
	case AccessGroup = 'access_group';
	case Account = 'account';
	case AiGateway = 'ai_gateway';
	case AlertingPolicy = 'alerting_policy';
	case AlertingWebhook = 'alerting_webhook';
	case CloudflaredTunnel = 'cloudflared_tunnel';
	case D1Database = 'd1_database';
	case DurableObjectNamespace = 'durable_object_namespace';
	case GatewayList = 'gateway_list';
	case GatewayRule = 'gateway_rule';
	case Image = 'image';
	case KvNamespace = 'kv_namespace';
	case Queue = 'queue';
	case R2Bucket = 'r2_bucket';
	case ResourceShare = 'resource_share';
	case StreamLiveInput = 'stream_live_input';
	case StreamVideo = 'stream_video';
	case Worker = 'worker';
	case WorkerVersion = 'worker_version';
}
