<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum EmailSecurityUpdateImpersonationRegistryProvenance: string
{
	case A1SINTERNAL = 'A1S_INTERNAL';
	case SNOOPYCASBOFFICE365 = 'SNOOPY-CASB_OFFICE_365';
	case SNOOPYOFFICE365 = 'SNOOPY-OFFICE_365';
	case SNOOPYGOOGLEDIRECTORY = 'SNOOPY-GOOGLE_DIRECTORY';
}
