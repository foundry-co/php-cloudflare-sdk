<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum EmailSecurityGetMessageDeliveryMode: string
{
	case DIRECT = 'DIRECT';
	case BCC = 'BCC';
	case JOURNAL = 'JOURNAL';
	case REVIEWSUBMISSION = 'REVIEW_SUBMISSION';
	case DMARCUNVERIFIED = 'DMARC_UNVERIFIED';
	case DMARCFAILUREREPORT = 'DMARC_FAILURE_REPORT';
	case DMARCAGGREGATEREPORT = 'DMARC_AGGREGATE_REPORT';
	case THREATINTELSUBMISSION = 'THREAT_INTEL_SUBMISSION';
	case SIMULATIONSUBMISSION = 'SIMULATION_SUBMISSION';
	case API = 'API';
	case RETROSCAN = 'RETRO_SCAN';
}
