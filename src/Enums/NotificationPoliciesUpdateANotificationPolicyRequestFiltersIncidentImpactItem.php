<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum NotificationPoliciesUpdateANotificationPolicyRequestFiltersIncidentImpactItem: string
{
	case INCIDENTIMPACTNONE = 'INCIDENT_IMPACT_NONE';
	case INCIDENTIMPACTMINOR = 'INCIDENT_IMPACT_MINOR';
	case INCIDENTIMPACTMAJOR = 'INCIDENT_IMPACT_MAJOR';
	case INCIDENTIMPACTCRITICAL = 'INCIDENT_IMPACT_CRITICAL';
}
