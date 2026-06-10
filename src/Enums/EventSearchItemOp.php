<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum EventSearchItemOp: string
{
	case Equals = 'equals';
	case Not = 'not';
	case Gt = 'gt';
	case Gte = 'gte';
	case Lt = 'lt';
	case Lte = 'lte';
	case Like = 'like';
	case Contains = 'contains';
	case StartsWith = 'startsWith';
	case EndsWith = 'endsWith';
	case In = 'in';
	case Find = 'find';
}
