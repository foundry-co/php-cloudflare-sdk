<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum SecurityCenterInsightsIssueTypeItem: string
{
	case ComplianceViolation = 'compliance_violation';
	case EmailSecurity = 'email_security';
	case ExposedInfrastructure = 'exposed_infrastructure';
	case InsecureConfiguration = 'insecure_configuration';
	case WeakAuthentication = 'weak_authentication';
	case ConfigurationSuggestion = 'configuration_suggestion';
}
