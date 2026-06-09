<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specifies how secrets are accessed in containers, defining the name of the secret within the container and the corresponding account secret name.
 */
readonly class CreateApplicationRequestConfigurationSecretsItem
{
	public function __construct(
		/** The name of the secret within the container */
		public string $name,
		/** Corresponding secret name from the account */
		public string $secret,
		/** The secret access type denotes how a secret is made available within a container. Available Options are "env". */
		public \FoundryCo\Cloudflare\Enums\CreateApplicationRequestConfigurationSecretsItemType $type,
	) {
	}
}
