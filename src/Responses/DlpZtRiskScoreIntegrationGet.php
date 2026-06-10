<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpZtRiskScoreIntegrationGet
{
	public function __construct(
		/** The Cloudflare account tag. */
		public ?string $accountTag = null,
		/** Whether this integration is enabled and should export changes in risk score. */
		public ?bool $active = null,
		/** When the integration was created in RFC3339 format. */
		public ?\DateTimeImmutable $createdAt = null,
		/** The id of the integration, a UUIDv4. */
		public ?string $id = null,
		public ?\FoundryCo\Cloudflare\Enums\DlpZtRiskScoreIntegrationGetIntegrationType $integrationType = null,
		/**
		 * A reference ID defined by the client.
		 * Should be set to the Access-Okta IDP integration ID.
		 * Useful when the risk-score integration needs to be associated with a secondary asset and recalled using that ID.
		 */
		public ?string $referenceId = null,
		/** The base URL for the tenant. E.g. "https://tenant.okta.com". */
		public ?string $tenantUrl = null,
		/** The URL for the Shared Signals Framework configuration, e.g. "/.well-known/sse-configuration/{integration_uuid}/". https://openid.net/specs/openid-sse-framework-1_0.html#rfc.section.6.2.1. */
		public ?string $wellKnownUrl = null,
	) {
	}
}
