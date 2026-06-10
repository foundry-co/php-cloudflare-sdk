<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarHTTPDimension: string
{
	case ADM1 = 'ADM1';
	case APITRAFFIC = 'API_TRAFFIC';
	case AS = 'AS';
	case BOTCLASS = 'BOT_CLASS';
	case BROWSER = 'BROWSER';
	case BROWSERFAMILY = 'BROWSER_FAMILY';
	case CONTENTTYPE = 'CONTENT_TYPE';
	case DEVICETYPE = 'DEVICE_TYPE';
	case HTTPPROTOCOL = 'HTTP_PROTOCOL';
	case HTTPVERSION = 'HTTP_VERSION';
	case IPVERSION = 'IP_VERSION';
	case LOCATION = 'LOCATION';
	case OS = 'OS';
	case POSTQUANTUM = 'POST_QUANTUM';
	case TLSVERSION = 'TLS_VERSION';
}
