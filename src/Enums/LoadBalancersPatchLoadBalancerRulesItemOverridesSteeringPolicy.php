<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum LoadBalancersPatchLoadBalancerRulesItemOverridesSteeringPolicy: string
{
	case Off = 'off';
	case Geo = 'geo';
	case Random = 'random';
	case DynamicLatency = 'dynamic_latency';
	case Proximity = 'proximity';
	case LeastOutstandingRequests = 'least_outstanding_requests';
	case LeastConnections = 'least_connections';
}
