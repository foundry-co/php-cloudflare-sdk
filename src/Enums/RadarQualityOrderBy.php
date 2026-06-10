<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarQualityOrderBy: string
{
	case BANDWIDTHDOWNLOAD = 'BANDWIDTH_DOWNLOAD';
	case BANDWIDTHUPLOAD = 'BANDWIDTH_UPLOAD';
	case LATENCYIDLE = 'LATENCY_IDLE';
	case LATENCYLOADED = 'LATENCY_LOADED';
	case JITTERIDLE = 'JITTER_IDLE';
	case JITTERLOADED = 'JITTER_LOADED';
}
