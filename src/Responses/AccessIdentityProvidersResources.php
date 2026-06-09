<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessIdentityProvidersResources
{
	public function __construct(
		/** The display name of the SCIM Group resource. */
		public ?string $displayName = null,
		/** The IdP-generated Id of the SCIM resource. */
		public ?string $externalId = null,
		/** The unique Cloudflare-generated Id of the SCIM resource. */
		public ?string $id = null,
		/** The metadata of the SCIM resource. */
		public ?AccessIdentityProvidersResourcesMeta $meta = null,
		/** The list of URIs which indicate the attributes contained within a SCIM resource. */
		public ?array $schemas = null,
	) {
	}
}
