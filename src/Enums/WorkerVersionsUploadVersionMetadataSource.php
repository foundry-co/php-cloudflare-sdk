<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum WorkerVersionsUploadVersionMetadataSource: string
{
	case Unknown = 'unknown';
	case Api = 'api';
	case Wrangler = 'wrangler';
	case Terraform = 'terraform';
	case Dash = 'dash';
	case DashTemplate = 'dash_template';
	case Integration = 'integration';
	case QuickEditor = 'quick_editor';
	case Playground = 'playground';
	case Workersci = 'workersci';
}
