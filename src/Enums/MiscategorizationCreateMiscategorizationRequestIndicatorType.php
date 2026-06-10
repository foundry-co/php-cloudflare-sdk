<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum MiscategorizationCreateMiscategorizationRequestIndicatorType: string
{
	case Domain = 'domain';
	case Ipv4 = 'ipv4';
	case Ipv6 = 'ipv6';
	case Url = 'url';
}
