<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Zone
 */
readonly class ZonesPostRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Responses\ZonesPostRequestAccount $account,
		/** The domain name. Per [RFC 1035](https://datatracker.ietf.org/doc/html/rfc1035#section-2.3.4) the overall zone name can be up to 253 characters, with each segment ("label") not exceeding 63 characters. */
		public string $name,
		/**
		 * A full zone implies that DNS is hosted with Cloudflare. A partial zone is
		 * typically a partner-hosted zone or a CNAME setup.
		 */
		public ?\FoundryCo\Cloudflare\Enums\ZonesPostRequestType $type = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'account' => $this->account->toArray(),
		    'name' => $this->name,
		    'type' => $this->type?->value,
		], fn ($v) => $v !== null);
	}
}
