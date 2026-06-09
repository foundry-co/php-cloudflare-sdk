<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum EmailSecurityDeliveryStatus: string
{
	case Delivered = 'delivered';
	case Moved = 'moved';
	case Quarantined = 'quarantined';
	case Rejected = 'rejected';
	case Deferred = 'deferred';
	case Bounced = 'bounced';
	case Queued = 'queued';
}
