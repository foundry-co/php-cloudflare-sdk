<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum PhysicalDevicesSortBy: string
{
	case Name = 'name';
	case Id = 'id';
	case ClientVersion = 'client_version';
	case LastSeenUserEmail = 'last_seen_user.email';
	case LastSeenAt = 'last_seen_at';
	case ActiveRegistrations = 'active_registrations';
	case CreatedAt = 'created_at';
}
