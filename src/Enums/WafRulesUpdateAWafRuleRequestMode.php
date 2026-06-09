<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum WafRulesUpdateAWafRuleRequestMode: string
{
	case Default = 'default';
	case Disable = 'disable';
	case Simulate = 'simulate';
	case Block = 'block';
	case Challenge = 'challenge';
	case On = 'on';
	case Off = 'off';
}
