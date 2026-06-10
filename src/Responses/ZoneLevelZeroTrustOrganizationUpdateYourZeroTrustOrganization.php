<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneLevelZeroTrustOrganizationUpdateYourZeroTrustOrganization
{
	public function __construct(
		/** The unique subdomain assigned to your Zero Trust organization. */
		public ?string $authDomain = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** Determines whether to deny all requests to Cloudflare-protected resources that lack an associated Access application. If enabled, you must explicitly configure an Access application and policy to allow traffic to your Cloudflare-protected resources. For domains you want to be public across all subdomains, add the domain to the `deny_unmatched_requests_exempted_zone_names` array. */
		public ?bool $denyUnmatchedRequests = null,
		/** Contains zone names to exempt from the `deny_unmatched_requests` feature. Requests to a subdomain in an exempted zone will block unauthenticated traffic by default if there is a configured Access application and policy that matches the request. */
		public ?array $denyUnmatchedRequestsExemptedZoneNames = null,
		/** Lock all settings as Read-Only in the Dashboard, regardless of user permission. Updates may only be made via the API or Terraform for this account when enabled. */
		public ?bool $isUiReadOnly = null,
		public ?ZoneLevelZeroTrustOrganizationUpdateYourZeroTrustOrganizationLoginDesign $loginDesign = null,
		/** The name of your Zero Trust organization. */
		public ?string $name = null,
		/** A description of the reason why the UI read only field is being toggled. */
		public ?string $uiReadOnlyToggleReason = null,
		public ?\DateTimeImmutable $updatedAt = null,
		/** The amount of time a user seat is inactive before it expires. When the user seat exceeds the set time of inactivity, the user is removed as an active seat and no longer counts against your Teams seat count. Must be in the format `300ms` or `2h45m`. Valid time units are: `ns`, `us` (or `µs`), `ms`, `s`, `m`, `h`. */
		public ?string $userSeatExpirationInactiveTime = null,
	) {
	}
}
