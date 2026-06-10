<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum DevicePostureIntegrationsUpdateDevicePostureIntegrationType: string
{
	case WorkspaceOne = 'workspace_one';
	case CrowdstrikeS2s = 'crowdstrike_s2s';
	case Uptycs = 'uptycs';
	case Intune = 'intune';
	case Kolide = 'kolide';
	case TaniumS2s = 'tanium_s2s';
	case SentineloneS2s = 'sentinelone_s2s';
	case CustomS2s = 'custom_s2s';
}
