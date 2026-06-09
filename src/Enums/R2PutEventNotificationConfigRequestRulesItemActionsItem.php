<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum R2PutEventNotificationConfigRequestRulesItemActionsItem: string
{
	case PutObject = 'PutObject';
	case CopyObject = 'CopyObject';
	case DeleteObject = 'DeleteObject';
	case CompleteMultipartUpload = 'CompleteMultipartUpload';
	case LifecycleDeletion = 'LifecycleDeletion';
}
