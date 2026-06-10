<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarHTTPTlsVersionItem: string
{
	case TLSv10 = 'TLSv1_0';
	case TLSv11 = 'TLSv1_1';
	case TLSv12 = 'TLSv1_2';
	case TLSv13 = 'TLSv1_3';
	case TLSvQUIC = 'TLSvQUIC';
}
