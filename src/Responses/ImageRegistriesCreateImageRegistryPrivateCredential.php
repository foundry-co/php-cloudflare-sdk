<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A reference to a secret stored in Secrets Store
 */
readonly class ImageRegistriesCreateImageRegistryPrivateCredential
{
	public function __construct(
		/** Name of the secret being referenced */
		public string $secretName,
		/** Store ID where the secret is stored */
		public string $storeId,
	) {
	}
}
