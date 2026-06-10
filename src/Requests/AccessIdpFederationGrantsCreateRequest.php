<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create an IdP federation grant
 */
readonly class AccessIdpFederationGrantsCreateRequest
{
	public function __construct(
		/** UID of the identity provider to federate. Must be an existing identity provider in this account. One-time pin and Cloudflare-managed identity providers cannot be federated. */
		public string $idpId,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'idp_id' => $this->idpId,
		], fn ($v) => $v !== null);
	}
}
