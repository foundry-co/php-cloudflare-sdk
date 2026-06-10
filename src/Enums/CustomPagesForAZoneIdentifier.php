<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum CustomPagesForAZoneIdentifier: string
{
	case V1000Errors = '1000_errors';
	case V500Errors = '500_errors';
	case BasicChallenge = 'basic_challenge';
	case CountryChallenge = 'country_challenge';
	case IpBlock = 'ip_block';
	case ManagedChallenge = 'managed_challenge';
	case RatelimitBlock = 'ratelimit_block';
	case UnderAttack = 'under_attack';
	case WafBlock = 'waf_block';
	case WafChallenge = 'waf_challenge';
}
