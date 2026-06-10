<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarDNSResponseTtlItem: string
{
	case LTE1M = 'LTE_1M';
	case GT1MLTE5M = 'GT_1M_LTE_5M';
	case GT5MLTE15M = 'GT_5M_LTE_15M';
	case GT15MLTE1H = 'GT_15M_LTE_1H';
	case GT1HLTE1D = 'GT_1H_LTE_1D';
	case GT1DLTE1W = 'GT_1D_LTE_1W';
	case GT1W = 'GT_1W';
}
