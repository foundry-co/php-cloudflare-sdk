<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum ZeroTrustListsCreateZeroTrustListRequestType: string
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
