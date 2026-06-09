<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create new risk score integration.
 */
readonly class DlpZtRiskScoreIntegrationCreateRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\DlpZtRiskScoreIntegrationCreateRequestIntegrationType $integrationType,
		/** The base url of the tenant, e.g. "https://tenant.okta.com". */
		public string $tenantUrl,
		/**
		 * A reference id that can be supplied by the client. Currently this should be set to the Access-Okta IDP ID (a UUIDv4).
		 * https://developers.cloudflare.com/api/operations/access-identity-providers-get-an-access-identity-provider
		 */
		public ?string $referenceId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'integration_type' => $this->integrationType->value,
		    'tenant_url' => $this->tenantUrl,
		    'reference_id' => $this->referenceId,
		], fn ($v) => $v !== null);
	}
}
