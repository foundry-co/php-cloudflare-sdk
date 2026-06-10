<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum DexEndpointsTracerouteTestResultNetworkPathHopsItemMile: string
{
	case ClientToApp = 'client-to-app';
	case ClientToCfEgress = 'client-to-cf-egress';
	case ClientToCfIngress = 'client-to-cf-ingress';
	case ClientToIsp = 'client-to-isp';
}
