<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum EmailAuthReportsStatus: string
{
	case MissingDmarcReport = 'missing-dmarc-report';
	case MultipleDmarcReports = 'multiple-dmarc-reports';
	case MissingDmarcRua = 'missing-dmarc-rua';
	case CnameOnDmarcRecord = 'cname-on-dmarc-record';
}
