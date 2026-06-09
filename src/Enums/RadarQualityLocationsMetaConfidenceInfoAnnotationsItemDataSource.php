<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarQualityLocationsMetaConfidenceInfoAnnotationsItemDataSource: string
{
	case ALL = 'ALL';
	case AIBOTS = 'AI_BOTS';
	case AIGATEWAY = 'AI_GATEWAY';
	case BGP = 'BGP';
	case BOTS = 'BOTS';
	case CONNECTIONANOMALY = 'CONNECTION_ANOMALY';
	case CT = 'CT';
	case DNS = 'DNS';
	case DNSMAGNITUDE = 'DNS_MAGNITUDE';
	case DNSAS112 = 'DNS_AS112';
	case DOS = 'DOS';
	case EMAILROUTING = 'EMAIL_ROUTING';
	case EMAILSECURITY = 'EMAIL_SECURITY';
	case FW = 'FW';
	case FWPG = 'FW_PG';
	case HTTP = 'HTTP';
	case HTTPCONTROL = 'HTTP_CONTROL';
	case HTTPCRAWLERREFERER = 'HTTP_CRAWLER_REFERER';
	case HTTPORIGINS = 'HTTP_ORIGINS';
	case IQI = 'IQI';
	case LEAKEDCREDENTIALS = 'LEAKED_CREDENTIALS';
	case NET = 'NET';
	case ROBOTSTXT = 'ROBOTS_TXT';
	case SPEED = 'SPEED';
	case WORKERSAI = 'WORKERS_AI';
}
