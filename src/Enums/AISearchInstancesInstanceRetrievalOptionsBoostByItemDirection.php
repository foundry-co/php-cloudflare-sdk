<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum AISearchInstancesInstanceRetrievalOptionsBoostByItemDirection: string
{
	case Asc = 'asc';
	case Desc = 'desc';
	case Exists = 'exists';
	case NotExists = 'not_exists';
}
