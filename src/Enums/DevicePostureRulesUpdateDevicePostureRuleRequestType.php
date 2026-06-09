<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum DevicePostureRulesUpdateDevicePostureRuleRequestType: string
{
	case File = 'file';
	case Application = 'application';
	case Tanium = 'tanium';
	case Gateway = 'gateway';
	case Warp = 'warp';
	case DiskEncryption = 'disk_encryption';
	case SerialNumber = 'serial_number';
	case Sentinelone = 'sentinelone';
	case Carbonblack = 'carbonblack';
	case Firewall = 'firewall';
	case OsVersion = 'os_version';
	case DomainJoined = 'domain_joined';
	case ClientCertificate = 'client_certificate';
	case ClientCertificateV2 = 'client_certificate_v2';
	case Antivirus = 'antivirus';
	case UniqueClientId = 'unique_client_id';
	case Kolide = 'kolide';
	case TaniumS2s = 'tanium_s2s';
	case CrowdstrikeS2s = 'crowdstrike_s2s';
	case Intune = 'intune';
	case WorkspaceOne = 'workspace_one';
	case SentineloneS2s = 'sentinelone_s2s';
	case CustomS2s = 'custom_s2s';
}
