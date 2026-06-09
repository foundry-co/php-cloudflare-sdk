<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum EmailSecurityMessageFindingsItemDetection: string
{
	case MALICIOUS = 'MALICIOUS';
	case MALICIOUSBEC = 'MALICIOUS-BEC';
	case SUSPICIOUS = 'SUSPICIOUS';
	case SPOOF = 'SPOOF';
	case SPAM = 'SPAM';
	case BULK = 'BULK';
	case ENCRYPTED = 'ENCRYPTED';
	case EXTERNAL = 'EXTERNAL';
	case UNKNOWN = 'UNKNOWN';
	case NONE = 'NONE';
}
