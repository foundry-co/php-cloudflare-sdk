<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum CloudflareTunnelTunnelsTunType: string
{
	case CfdTunnel = 'cfd_tunnel';
	case WarpConnector = 'warp_connector';
	case Warp = 'warp';
	case Magic = 'magic';
	case IpSec = 'ip_sec';
	case Gre = 'gre';
	case Cni = 'cni';
}
