<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum AigConfigDeleteDatasetFiltersItemKey: string
{
	case CreatedAt = 'created_at';
	case RequestContentType = 'request_content_type';
	case ResponseContentType = 'response_content_type';
	case Success = 'success';
	case Cached = 'cached';
	case Provider = 'provider';
	case Model = 'model';
	case Cost = 'cost';
	case Tokens = 'tokens';
	case TokensIn = 'tokens_in';
	case TokensOut = 'tokens_out';
	case Duration = 'duration';
	case Feedback = 'feedback';
}
