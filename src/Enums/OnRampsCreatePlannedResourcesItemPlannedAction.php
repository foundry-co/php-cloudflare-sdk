<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum OnRampsCreatePlannedResourcesItemPlannedAction: string
{
	case NoOp = 'no_op';
	case Create = 'create';
	case Update = 'update';
	case Replace = 'replace';
	case Destroy = 'destroy';
}
