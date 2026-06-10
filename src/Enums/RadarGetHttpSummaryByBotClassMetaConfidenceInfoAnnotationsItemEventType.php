<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarGetHttpSummaryByBotClassMetaConfidenceInfoAnnotationsItemEventType: string
{
	case EVENT = 'EVENT';
	case GENERAL = 'GENERAL';
	case OUTAGE = 'OUTAGE';
	case PARTIALPROJECTION = 'PARTIAL_PROJECTION';
	case PIPELINE = 'PIPELINE';
	case TRAFFICANOMALY = 'TRAFFIC_ANOMALY';
}
