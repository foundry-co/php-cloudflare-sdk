<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PublicPatchPrefixBinding
{
	public function __construct(
		/** The CIDR that is bound. */
		public ?string $cidr = null,
		/** The ID of the binding. */
		public ?string $id = null,
		/** The ID of the parent prefix. */
		public ?string $prefixId = null,
		/** The region key used for the binding. */
		public ?string $regionKey = null,
	) {
	}
}
