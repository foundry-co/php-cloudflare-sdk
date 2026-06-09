<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum ZeroTrustOrganizationCreateYourZeroTrustOrganizationRequestMfaConfigAllowedAuthenticatorsItem: string
{
	case Totp = 'totp';
	case Biometrics = 'biometrics';
	case SecurityKey = 'security_key';
	case SshPivKey = 'ssh_piv_key';
}
