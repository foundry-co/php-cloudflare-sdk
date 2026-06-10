<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum CustomIndicatorFeedsGetIndicatorFeedMetadataLatestUploadStatus: string
{
	case Mirroring = 'Mirroring';
	case Unifying = 'Unifying';
	case Loading = 'Loading';
	case Provisioning = 'Provisioning';
	case Complete = 'Complete';
	case Error = 'Error';
}
