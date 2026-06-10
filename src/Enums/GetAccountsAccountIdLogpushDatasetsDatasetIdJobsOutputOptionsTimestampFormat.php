<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum GetAccountsAccountIdLogpushDatasetsDatasetIdJobsOutputOptionsTimestampFormat: string
{
	case Unixnano = 'unixnano';
	case Unix = 'unix';
	case Rfc3339 = 'rfc3339';
	case Rfc3339ms = 'rfc3339ms';
	case Rfc3339ns = 'rfc3339ns';
}
