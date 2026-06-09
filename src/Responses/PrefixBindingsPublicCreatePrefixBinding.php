<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PrefixBindingsPublicCreatePrefixBinding
{
	public function __construct(
		/** The CIDR that is bound. */
		public string $cidr,
		/** The ID of the binding. */
		public string $id,
		/** The ID of the parent prefix. */
		public string $prefixId,
		/** The region key used for the binding. */
		public string $regionKey,
	) {
	}
}
