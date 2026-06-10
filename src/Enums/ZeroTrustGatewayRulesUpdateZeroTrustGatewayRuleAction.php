<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleAction: string
{
	case On = 'on';
	case Off = 'off';
	case Allow = 'allow';
	case Block = 'block';
	case Scan = 'scan';
	case Noscan = 'noscan';
	case Safesearch = 'safesearch';
	case Ytrestricted = 'ytrestricted';
	case Isolate = 'isolate';
	case Noisolate = 'noisolate';
	case Override = 'override';
	case L4Override = 'l4_override';
	case Egress = 'egress';
	case Resolve = 'resolve';
	case Quarantine = 'quarantine';
	case Redirect = 'redirect';
}
