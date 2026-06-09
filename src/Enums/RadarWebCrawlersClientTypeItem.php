<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarWebCrawlersClientTypeItem: string
{
	case HUMAN = 'HUMAN';
	case NONAIBOT = 'NON_AI_BOT';
	case AIBOT = 'AI_BOT';
	case MIXEDPURPOSE = 'MIXED_PURPOSE';
}
