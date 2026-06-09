<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DomainIntelligenceDetails
{
	public function __construct(
		/** Additional information related to the host name. */
		public ?DomainIntelligenceDetailsAdditionalInformation $additionalInformation = null,
		/** Application that the hostname belongs to. */
		public ?DomainIntelligenceDetailsApplication $application = null,
		public ?array $contentCategories = null,
		public ?string $domain = null,
		public ?array $inheritedContentCategories = null,
		/** Domain from which `inherited_content_categories` and `inherited_risk_types` are inherited, if applicable. */
		public ?string $inheritedFrom = null,
		public ?array $inheritedRiskTypes = null,
		/** Global Cloudflare 100k ranking for the last 30 days, if available for the hostname. The top ranked domain is 1, the lowest ranked domain is 100,000. */
		public ?int $popularityRank = null,
		/** Specifies a list of references to one or more IP addresses or domain names that the domain name currently resolves to. */
		public ?array $resolvesToRefs = null,
		/** Hostname risk score, which is a value between 0 (lowest risk) to 1 (highest risk). */
		public ?float $riskScore = null,
		public ?array $riskTypes = null,
	) {
	}
}
