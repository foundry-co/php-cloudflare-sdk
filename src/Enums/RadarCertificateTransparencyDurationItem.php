<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarCertificateTransparencyDurationItem: string
{
	case LTE3D = 'LTE_3D';
	case GT3DLTE7D = 'GT_3D_LTE_7D';
	case GT7DLTE10D = 'GT_7D_LTE_10D';
	case GT10DLTE47D = 'GT_10D_LTE_47D';
	case GT47DLTE100D = 'GT_47D_LTE_100D';
	case GT100DLTE200D = 'GT_100D_LTE_200D';
	case GT200D = 'GT_200D';
}
