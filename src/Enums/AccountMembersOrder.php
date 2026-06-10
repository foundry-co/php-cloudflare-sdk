<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum AccountMembersOrder: string
{
	case UserFirstName = 'user.first_name';
	case UserLastName = 'user.last_name';
	case UserEmail = 'user.email';
	case Status = 'status';
}
