<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarAIBotsDimension: string
{
	case USERAGENT = 'USER_AGENT';
	case CRAWLPURPOSE = 'CRAWL_PURPOSE';
	case INDUSTRY = 'INDUSTRY';
	case VERTICAL = 'VERTICAL';
	case CONTENTTYPE = 'CONTENT_TYPE';
	case RESPONSESTATUS = 'RESPONSE_STATUS';
	case RESPONSESTATUSCATEGORY = 'RESPONSE_STATUS_CATEGORY';
}
