<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Credentials that can be used to interact with the requested image registry.
 */
readonly class ImageRegistriesGenerateImageRegistryCredentials
{
	public function __construct(
		/** A unique identifier for the user's account */
		public string $accountId,
		/** The domain of the image registry the credentials are for. */
		public string $registryHost,
		/** The username to use when authenticating to the image registry. */
		public string $username,
		/** The password to use when authenticating to the image registry. */
		public ?string $password = null,
	) {
	}
}
