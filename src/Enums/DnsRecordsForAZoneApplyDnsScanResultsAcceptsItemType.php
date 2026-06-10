<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum DnsRecordsForAZoneApplyDnsScanResultsAcceptsItemType: string
{
	case A = 'A';
	case AAAA = 'AAAA';
	case CNAME = 'CNAME';
	case MX = 'MX';
	case NS = 'NS';
	case OPENPGPKEY = 'OPENPGPKEY';
	case PTR = 'PTR';
	case TXT = 'TXT';
	case CAA = 'CAA';
	case CERT = 'CERT';
	case DNSKEY = 'DNSKEY';
	case DS = 'DS';
	case HTTPS = 'HTTPS';
	case LOC = 'LOC';
	case NAPTR = 'NAPTR';
	case SMIMEA = 'SMIMEA';
	case SRV = 'SRV';
	case SSHFP = 'SSHFP';
	case SVCB = 'SVCB';
	case TLSA = 'TLSA';
	case URI = 'URI';
}
