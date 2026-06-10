<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum AccountApiTokensListPermissionGroupsScopesItem: string
{
	case ComCloudflareApiAccount = 'com.cloudflare.api.account';
	case ComCloudflareApiAccountZone = 'com.cloudflare.api.account.zone';
	case ComCloudflareApiUser = 'com.cloudflare.api.user';
	case ComCloudflareEdgeR2Bucket = 'com.cloudflare.edge.r2.bucket';
}
