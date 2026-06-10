<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarLayer7AttacksDimension: string
{
	case HTTPMETHOD = 'HTTP_METHOD';
	case HTTPVERSION = 'HTTP_VERSION';
	case IPVERSION = 'IP_VERSION';
	case MANAGEDRULES = 'MANAGED_RULES';
	case MITIGATIONPRODUCT = 'MITIGATION_PRODUCT';
	case VERTICAL = 'VERTICAL';
	case INDUSTRY = 'INDUSTRY';
}
