<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessIdpFederationGrantsCreate
{
	public function __construct(
		/** When the grant was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** UID of the IdP federation grant. */
		public mixed $id = null,
		/** UID of the identity provider being federated. */
		public ?string $idpId = null,
	) {
	}
}
