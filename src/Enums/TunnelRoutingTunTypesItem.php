<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum TunnelRoutingTunTypesItem: string
{
	case CfdTunnel = 'cfd_tunnel';
	case WarpConnector = 'warp_connector';
	case Warp = 'warp';
	case Magic = 'magic';
	case IpSec = 'ip_sec';
	case Gre = 'gre';
	case Cni = 'cni';
}
