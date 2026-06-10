<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum PostPresetsRequestPermissionsWaitingRoomType: string
{
	case SKIP = 'SKIP';
	case ONPRIVILEGEDUSERENTRY = 'ON_PRIVILEGED_USER_ENTRY';
	case SKIPONACCEPT = 'SKIP_ON_ACCEPT';
}
