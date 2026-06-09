<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum OnRampsCreateStatusLifecycleState: string
{
	case OnrampNeedsApply = 'OnrampNeedsApply';
	case OnrampPendingPlan = 'OnrampPendingPlan';
	case OnrampPlanning = 'OnrampPlanning';
	case OnrampPlanFailed = 'OnrampPlanFailed';
	case OnrampPendingApproval = 'OnrampPendingApproval';
	case OnrampPendingApply = 'OnrampPendingApply';
	case OnrampApplying = 'OnrampApplying';
	case OnrampApplyFailed = 'OnrampApplyFailed';
	case OnrampActive = 'OnrampActive';
	case OnrampPendingDestroy = 'OnrampPendingDestroy';
	case OnrampDestroying = 'OnrampDestroying';
	case OnrampDestroyFailed = 'OnrampDestroyFailed';
}
