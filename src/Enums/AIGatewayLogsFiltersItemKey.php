<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum AIGatewayLogsFiltersItemKey: string
{
	case Id = 'id';
	case CreatedAt = 'created_at';
	case RequestContentType = 'request_content_type';
	case ResponseContentType = 'response_content_type';
	case RequestType = 'request_type';
	case Success = 'success';
	case Cached = 'cached';
	case Provider = 'provider';
	case Model = 'model';
	case ModelType = 'model_type';
	case Cost = 'cost';
	case Tokens = 'tokens';
	case TokensIn = 'tokens_in';
	case TokensOut = 'tokens_out';
	case Duration = 'duration';
	case Feedback = 'feedback';
	case EventId = 'event_id';
	case MetadataKey = 'metadata.key';
	case MetadataValue = 'metadata.value';
	case Authentication = 'authentication';
	case Wholesale = 'wholesale';
	case CompatibilityMode = 'compatibilityMode';
	case DlpAction = 'dlp_action';
}
