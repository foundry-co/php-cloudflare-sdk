<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum SslVerificationSslVerificationDetailsSignature: string
{
	case ECDSAWithSHA256 = 'ECDSAWithSHA256';
	case SHA1WithRSA = 'SHA1WithRSA';
	case SHA256WithRSA = 'SHA256WithRSA';
}
