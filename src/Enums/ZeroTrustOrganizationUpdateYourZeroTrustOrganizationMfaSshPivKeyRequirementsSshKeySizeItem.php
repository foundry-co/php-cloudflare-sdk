<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum ZeroTrustOrganizationUpdateYourZeroTrustOrganizationMfaSshPivKeyRequirementsSshKeySizeItem: int
{
	case V256 = 256;
	case V384 = 384;
	case V521 = 521;
	case V2048 = 2048;
	case V3072 = 3072;
	case V4096 = 4096;
}
