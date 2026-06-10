<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update domain
 */
readonly class RegistrarDomainsUpdateDomainRequest
{
	public function __construct(
		/** Auto-renew controls whether subscription is automatically renewed upon domain expiration. */
		public ?bool $autoRenew = null,
		/** Shows whether a registrar lock is in place for a domain. */
		public ?bool $locked = null,
		/** Privacy option controls redacting WHOIS information. */
		public ?bool $privacy = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'auto_renew' => $this->autoRenew,
		    'locked' => $this->locked,
		    'privacy' => $this->privacy,
		], fn ($v) => $v !== null);
	}
}
