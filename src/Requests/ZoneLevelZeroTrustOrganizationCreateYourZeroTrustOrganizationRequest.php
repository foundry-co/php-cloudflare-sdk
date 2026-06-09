<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create your Zero Trust organization
 */
readonly class ZoneLevelZeroTrustOrganizationCreateYourZeroTrustOrganizationRequest
{
	public function __construct(
		/** The unique subdomain assigned to your Zero Trust organization. */
		public string $authDomain,
		/** The name of your Zero Trust organization. */
		public string $name,
		/** Lock all settings as Read-Only in the Dashboard, regardless of user permission. Updates may only be made via the API or Terraform for this account when enabled. */
		public ?bool $isUiReadOnly = null,
		public ?\FoundryCo\Cloudflare\Responses\ZoneLevelZeroTrustOrganizationCreateYourZeroTrustOrganizationRequestLoginDesign $loginDesign = null,
		/** A description of the reason why the UI read only field is being toggled. */
		public ?string $uiReadOnlyToggleReason = null,
		/** The amount of time a user seat is inactive before it expires. When the user seat exceeds the set time of inactivity, the user is removed as an active seat and no longer counts against your Teams seat count. Must be in the format `300ms` or `2h45m`. Valid time units are: `ns`, `us` (or `µs`), `ms`, `s`, `m`, `h`. */
		public ?string $userSeatExpirationInactiveTime = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'auth_domain' => $this->authDomain,
		    'name' => $this->name,
		    'is_ui_read_only' => $this->isUiReadOnly,
		    'login_design' => $this->loginDesign?->toArray(),
		    'ui_read_only_toggle_reason' => $this->uiReadOnlyToggleReason,
		    'user_seat_expiration_inactive_time' => $this->userSeatExpirationInactiveTime,
		], fn ($v) => $v !== null);
	}
}
