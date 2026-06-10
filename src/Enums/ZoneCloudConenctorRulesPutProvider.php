<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum ZoneCloudConenctorRulesPutProvider: string
{
	case AwsS3 = 'aws_s3';
	case CloudflareR2 = 'cloudflare_r2';
	case GcpStorage = 'gcp_storage';
	case AzureStorage = 'azure_storage';
}
