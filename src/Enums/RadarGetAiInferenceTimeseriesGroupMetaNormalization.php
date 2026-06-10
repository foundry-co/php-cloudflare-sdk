<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarGetAiInferenceTimeseriesGroupMetaNormalization: string
{
	case PERCENTAGE = 'PERCENTAGE';
	case MIN0MAX = 'MIN0_MAX';
	case MINMAX = 'MIN_MAX';
	case RAWVALUES = 'RAW_VALUES';
	case PERCENTAGECHANGE = 'PERCENTAGE_CHANGE';
	case ROLLINGAVERAGE = 'ROLLING_AVERAGE';
	case OVERLAPPEDPERCENTAGE = 'OVERLAPPED_PERCENTAGE';
	case RATIO = 'RATIO';
}
