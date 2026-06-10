<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum CertificatePacksRestartValidationForAdvancedCertificateManagerCertificatePackType: string
{
	case MhCustom = 'mh_custom';
	case ManagedHostname = 'managed_hostname';
	case SniCustom = 'sni_custom';
	case Universal = 'universal';
	case Advanced = 'advanced';
	case TotalTls = 'total_tls';
	case Keyless = 'keyless';
	case LegacyCustom = 'legacy_custom';
}
