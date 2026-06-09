<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Validate ownership challenge
 */
readonly class PostAccountsAccountIdLogpushOwnershipValidateRequest
{
	public function __construct(
		/** Uniquely identifies a resource (such as an s3 bucket) where data. will be pushed. Additional configuration parameters supported by the destination may be included. */
		public string $destinationConf,
		/** Ownership challenge token to prove destination ownership. */
		public string $ownershipChallenge,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'destination_conf' => $this->destinationConf,
		    'ownership_challenge' => $this->ownershipChallenge,
		], fn ($v) => $v !== null);
	}
}
