<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarCertificateTransparencyDimension: string
{
	case CA = 'CA';
	case CAOWNER = 'CA_OWNER';
	case DURATION = 'DURATION';
	case ENTRYTYPE = 'ENTRY_TYPE';
	case EXPIRATIONSTATUS = 'EXPIRATION_STATUS';
	case HASIPS = 'HAS_IPS';
	case HASWILDCARDS = 'HAS_WILDCARDS';
	case LOG = 'LOG';
	case LOGAPI = 'LOG_API';
	case LOGOPERATOR = 'LOG_OPERATOR';
	case PUBLICKEYALGORITHM = 'PUBLIC_KEY_ALGORITHM';
	case SIGNATUREALGORITHM = 'SIGNATURE_ALGORITHM';
	case TLD = 'TLD';
	case VALIDATIONLEVEL = 'VALIDATION_LEVEL';
}
