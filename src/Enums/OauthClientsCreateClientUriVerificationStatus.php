<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum OauthClientsCreateClientUriVerificationStatus: string
{
	case Pending = 'pending';
	case InProgress = 'in_progress';
	case Verified = 'verified';
	case Failed = 'failed';
}
