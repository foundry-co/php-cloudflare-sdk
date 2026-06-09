<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Registration
 */
readonly class RegistrarDomainRegistrationUpdateRequest
{
	public function __construct(
		/**
		 * Enable or disable automatic renewal.
		 * Setting this field to `true` authorizes Cloudflare to charge the
		 * account's default payment method up to 30 days before domain expiry
		 * to renew the domain automatically. Renewal pricing may change over
		 * time based on registry pricing.
		 */
		public ?bool $autoRenew = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'auto_renew' => $this->autoRenew,
		], fn ($v) => $v !== null);
	}
}
