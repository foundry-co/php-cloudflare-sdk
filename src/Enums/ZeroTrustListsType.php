<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum ZeroTrustListsType: string
{
	case SERIAL = 'SERIAL';
	case URL = 'URL';
	case DOMAIN = 'DOMAIN';
	case EMAIL = 'EMAIL';
	case IP = 'IP';
	case CATEGORY = 'CATEGORY';
	case LOCATION = 'LOCATION';
	case DEVICE = 'DEVICE';
	case AAGUID = 'AAGUID';
}
