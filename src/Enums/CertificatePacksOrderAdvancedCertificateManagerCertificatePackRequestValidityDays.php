<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum CertificatePacksOrderAdvancedCertificateManagerCertificatePackRequestValidityDays: int
{
	case V14 = 14;
	case V30 = 30;
	case V90 = 90;
	case V365 = 365;
}
