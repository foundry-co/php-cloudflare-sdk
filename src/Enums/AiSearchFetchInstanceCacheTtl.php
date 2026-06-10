<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum AiSearchFetchInstanceCacheTtl: string
{
	case V600 = '600';
	case V1800 = '1800';
	case V3600 = '3600';
	case V7200 = '7200';
	case V21600 = '21600';
	case V43200 = '43200';
	case V86400 = '86400';
	case V172800 = '172800';
	case V259200 = '259200';
	case V518400 = '518400';
}
