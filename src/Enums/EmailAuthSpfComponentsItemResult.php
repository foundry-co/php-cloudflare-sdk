<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum EmailAuthSpfComponentsItemResult: string
{
	case Pass = 'pass';
	case Neutral = 'neutral';
	case Fail = 'fail';
	case SoftFail = 'soft_fail';
	case None = 'none';
	case TempError = 'temp_error';
	case PermError = 'perm_error';
}
