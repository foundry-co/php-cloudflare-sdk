<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum AuditLogsV2GetAccountAuditLogsActorContext: string
{
	case ApiKey = 'api_key';
	case ApiToken = 'api_token';
	case Dash = 'dash';
	case Oauth = 'oauth';
	case OriginCaKey = 'origin_ca_key';
}
