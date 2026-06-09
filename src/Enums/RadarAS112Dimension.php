<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarAS112Dimension: string
{
	case DNSSEC = 'DNSSEC';
	case EDNS = 'EDNS';
	case IPVERSION = 'IP_VERSION';
	case PROTOCOL = 'PROTOCOL';
	case QUERYTYPE = 'QUERY_TYPE';
	case RESPONSECODE = 'RESPONSE_CODE';
}
