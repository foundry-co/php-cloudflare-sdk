<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum CustomOriginTrustStoreCreateStatus: string
{
	case Initializing = 'initializing';
	case PendingDeployment = 'pending_deployment';
	case Active = 'active';
	case PendingDeletion = 'pending_deletion';
	case Deleted = 'deleted';
	case Expired = 'expired';
}
