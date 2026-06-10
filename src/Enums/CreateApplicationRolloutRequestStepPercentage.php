<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum CreateApplicationRolloutRequestStepPercentage: int
{
	case V5 = 5;
	case V10 = 10;
	case V20 = 20;
	case V25 = 25;
	case V50 = 50;
	case V100 = 100;
}
