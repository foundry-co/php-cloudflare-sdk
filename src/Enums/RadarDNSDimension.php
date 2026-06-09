<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarDNSDimension: string
{
	case AS = 'AS';
	case CACHEHIT = 'CACHE_HIT';
	case DNSSEC = 'DNSSEC';
	case DNSSECAWARE = 'DNSSEC_AWARE';
	case DNSSECE2E = 'DNSSEC_E2E';
	case IPVERSION = 'IP_VERSION';
	case LOCATION = 'LOCATION';
	case MATCHINGANSWER = 'MATCHING_ANSWER';
	case PROTOCOL = 'PROTOCOL';
	case QUERYTYPE = 'QUERY_TYPE';
	case RESPONSECODE = 'RESPONSE_CODE';
	case RESPONSETTL = 'RESPONSE_TTL';
	case TLD = 'TLD';
	case TLDDNSMAGNITUDE = 'TLD_DNS_MAGNITUDE';
}
