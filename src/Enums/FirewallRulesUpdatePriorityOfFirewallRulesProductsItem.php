<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum FirewallRulesUpdatePriorityOfFirewallRulesProductsItem: string
{
	case ZoneLockdown = 'zoneLockdown';
	case UaBlock = 'uaBlock';
	case Bic = 'bic';
	case Hot = 'hot';
	case SecurityLevel = 'securityLevel';
	case RateLimit = 'rateLimit';
	case Waf = 'waf';
}
