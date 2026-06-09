<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum AccountLoadBalancerMonitorsPatchMonitorRequestType: string
{
	case Http = 'http';
	case Https = 'https';
	case Tcp = 'tcp';
	case UdpIcmp = 'udp_icmp';
	case IcmpPing = 'icmp_ping';
	case Smtp = 'smtp';
}
