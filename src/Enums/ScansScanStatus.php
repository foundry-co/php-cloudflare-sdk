<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum ScansScanStatus: string
{
	case Created = 'created';
	case Scheduled = 'scheduled';
	case Planning = 'planning';
	case Running = 'running';
	case Finished = 'finished';
	case Failed = 'failed';
}
