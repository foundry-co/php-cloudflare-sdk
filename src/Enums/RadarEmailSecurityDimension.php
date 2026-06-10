<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarEmailSecurityDimension: string
{
	case SPAM = 'SPAM';
	case MALICIOUS = 'MALICIOUS';
	case SPOOF = 'SPOOF';
	case THREATCATEGORY = 'THREAT_CATEGORY';
	case ARC = 'ARC';
	case DKIM = 'DKIM';
	case DMARC = 'DMARC';
	case SPF = 'SPF';
	case TLSVERSION = 'TLS_VERSION';
}
