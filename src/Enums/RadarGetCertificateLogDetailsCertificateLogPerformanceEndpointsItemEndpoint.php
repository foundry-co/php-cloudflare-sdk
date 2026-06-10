<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarGetCertificateLogDetailsCertificateLogPerformanceEndpointsItemEndpoint: string
{
	case AddChainNew = 'add-chain (new)';
	case AddChainOld = 'add-chain (old)';
	case AddPreChainNew = 'add-pre-chain (new)';
	case AddPreChainOld = 'add-pre-chain (old)';
	case GetEntries = 'get-entries';
	case GetRoots = 'get-roots';
	case GetSth = 'get-sth';
}
