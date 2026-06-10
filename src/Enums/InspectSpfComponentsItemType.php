<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum InspectSpfComponentsItemType: string
{
	case ALL = 'ALL';
	case A = 'A';
	case MX = 'MX';
	case IP4 = 'IP4';
	case IP6 = 'IP6';
	case EXISTS = 'EXISTS';
	case INCLUDE = 'INCLUDE';
	case PTR = 'PTR';
	case REDIRECT = 'REDIRECT';
}
