<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum DNSAnalyticsTimeDelta: string
{
	case All = 'all';
	case Auto = 'auto';
	case Year = 'year';
	case Quarter = 'quarter';
	case Month = 'month';
	case Week = 'week';
	case Day = 'day';
	case Hour = 'hour';
	case Dekaminute = 'dekaminute';
	case Minute = 'minute';
}
