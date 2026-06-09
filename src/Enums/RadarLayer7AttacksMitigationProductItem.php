<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarLayer7AttacksMitigationProductItem: string
{
	case DDOS = 'DDOS';
	case WAF = 'WAF';
	case BOTMANAGEMENT = 'BOT_MANAGEMENT';
	case ACCESSRULES = 'ACCESS_RULES';
	case IPREPUTATION = 'IP_REPUTATION';
	case APISHIELD = 'API_SHIELD';
	case DATALOSSPREVENTION = 'DATA_LOSS_PREVENTION';
}
