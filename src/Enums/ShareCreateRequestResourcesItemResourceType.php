<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum ShareCreateRequestResourcesItemResourceType: string
{
	case CustomRuleset = 'custom-ruleset';
	case GatewayPolicy = 'gateway-policy';
	case GatewayDestinationIp = 'gateway-destination-ip';
	case GatewayBlockPageSettings = 'gateway-block-page-settings';
	case GatewayExtendedEmailMatching = 'gateway-extended-email-matching';
	case IdpFederationGrant = 'idp-federation-grant';
}
