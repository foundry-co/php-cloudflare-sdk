<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum CloudforceOneCreateRuleRequestActionsItemActionType: string
{
	case AlertGchat = 'alert_gchat';
	case Webhook = 'webhook';
	case Logging = 'logging';
	case Email = 'email';
	case Pipeline = 'pipeline';
	case Remediation = 'remediation';
	case Throttle = 'throttle';
	case Delete = 'delete';
}
