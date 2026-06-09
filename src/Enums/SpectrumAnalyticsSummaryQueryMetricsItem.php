<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum SpectrumAnalyticsSummaryQueryMetricsItem: string
{
	case Count = 'count';
	case BytesIngress = 'bytesIngress';
	case BytesEgress = 'bytesEgress';
	case DurationAvg = 'durationAvg';
	case DurationMedian = 'durationMedian';
	case Duration90th = 'duration90th';
	case Duration99th = 'duration99th';
}
