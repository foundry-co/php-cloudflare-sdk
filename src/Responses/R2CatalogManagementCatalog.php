<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Contains response from activating an R2 bucket as a catalog.
 */
readonly class R2CatalogManagementCatalog
{
	public function __construct(
		/** Use this to uniquely identify the activated catalog. */
		public string $id,
		/** Specifies the name of the activated catalog. */
		public string $name,
	) {
	}
}
