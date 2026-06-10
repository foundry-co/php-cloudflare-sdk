<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarWebCrawlersDimension: string
{
	case CLIENTTYPE = 'CLIENT_TYPE';
	case USERAGENT = 'USER_AGENT';
	case REFERER = 'REFERER';
	case CRAWLREFERRATIO = 'CRAWL_REFER_RATIO';
	case VERTICAL = 'VERTICAL';
	case INDUSTRY = 'INDUSTRY';
	case RESPONSESTATUS = 'RESPONSE_STATUS';
	case RESPONSESTATUSCATEGORY = 'RESPONSE_STATUS_CATEGORY';
}
