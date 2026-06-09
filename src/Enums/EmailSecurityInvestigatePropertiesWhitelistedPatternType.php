<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum EmailSecurityInvestigatePropertiesWhitelistedPatternType: string
{
	case QuarantineRelease = 'quarantine_release';
	case AcceptableSender = 'acceptable_sender';
	case AllowedSender = 'allowed_sender';
	case AllowedRecipient = 'allowed_recipient';
	case DomainSimilarity = 'domain_similarity';
	case DomainRecency = 'domain_recency';
	case ManagedAcceptableSender = 'managed_acceptable_sender';
	case OutboundNdr = 'outbound_ndr';
}
