<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarLeakedCredentialChecksCheckResultItem: string
{
	case CLEAN = 'CLEAN';
	case USERNAMELEAKED = 'USERNAME_LEAKED';
	case USERNAMEPASSWORDSIMILAR = 'USERNAME_PASSWORD_SIMILAR';
	case USERNAMEANDPASSWORDLEAKED = 'USERNAME_AND_PASSWORD_LEAKED';
	case PASSWORDLEAKED = 'PASSWORD_LEAKED';
}
