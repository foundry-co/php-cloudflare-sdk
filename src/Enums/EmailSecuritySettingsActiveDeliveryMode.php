<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum EmailSecuritySettingsActiveDeliveryMode: string
{
	case DIRECT = 'DIRECT';
	case BCC = 'BCC';
	case JOURNAL = 'JOURNAL';
	case API = 'API';
	case RETROSCAN = 'RETRO_SCAN';
}
