<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum CustomHostnameForAZoneCustomHostnameDetailsStatus: string
{
	case Active = 'active';
	case Pending = 'pending';
	case ActiveRedeploying = 'active_redeploying';
	case Moved = 'moved';
	case PendingDeletion = 'pending_deletion';
	case Deleted = 'deleted';
	case PendingBlocked = 'pending_blocked';
	case PendingMigration = 'pending_migration';
	case PendingProvisioned = 'pending_provisioned';
	case TestPending = 'test_pending';
	case TestActive = 'test_active';
	case TestActiveApex = 'test_active_apex';
	case TestBlocked = 'test_blocked';
	case TestFailed = 'test_failed';
	case Provisioned = 'provisioned';
	case Blocked = 'blocked';
}
