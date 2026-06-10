<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarOriginsMetric: string
{
	case CONNECTIONFAILURES = 'CONNECTION_FAILURES';
	case REQUESTS = 'REQUESTS';
	case RESPONSEHEADERRECEIVEDURATION = 'RESPONSE_HEADER_RECEIVE_DURATION';
	case TCPHANDSHAKEDURATION = 'TCP_HANDSHAKE_DURATION';
	case TCPRTT = 'TCP_RTT';
	case TLSHANDSHAKEDURATION = 'TLS_HANDSHAKE_DURATION';
}
